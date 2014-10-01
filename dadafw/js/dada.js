/** @preserve
 * Dada Framework <https://github.com/msikma/dadafw>
 * (C) 2013-2014, Michiel Sikma <info@michielsikma.com> and Dada Framework contributors
 * For a full list of contributors, view the project commit history.
 * @author Michiel Sikma
 *
 */
;(function(){

//todo: normalize "item"/"element"/"el"

/**
 * @namespace Dada Framework frontend code
 */
window.DadaFW = {};

/**
 * Main interface code.
 *
 * @static
 */
DadaFW = (function()
{
	var self = this;
	
	/** @type {!Array} List of content filters for DOM decoration. */
	self.filters = [];
	
	/**
	 * Applies relevant content filters to an element.
	 *
	 * @param {Element} item The DOM node to process.
	 * @param {Object} filters The list of filters to apply.
	 */
	self.perform_filters = function(item, filters)
	{
	    var a;
	    for (a = 0; a < filters.length; ++a) {
	        filters[a][1].call(null, item);
	    }
	}
	
	/**
	 * Registers a content filter.
	 *
	 * The selector variable will be compared against the element's
	 * ddfw attribute.
	 *
	 * @param {Object} sel What to select on.
	 * @param {Function} fn The function that processes the content.
	 */
	self.register_filter = function(cls, fn)
	{
	    self.filters.push([cls, fn]);
	}
	
	/**
	 * Registers the Dada Framework content filters.
	 *
	 * These are required for correct functioning of the framework,
	 * and for the usage of standard components such as the navbar.
	 */
	self.register_default_filters = function()
	{
        self.register_filter("line-numbers", function(node)
        {
            // Make an ordered list out of the content.
            var content = "<ol>";
            var line, lines = node.innerHTML.split("\n");
            
            var a;
            for (a = 0; a < lines.length; ++a) {
                line = lines[a];
                content += "<li>"+line+"</li>";
            }
            content += "</ol>";
            node.innerHTML = content;
            
            // The line numbers must have enough space to accomodate
            // the largest number.
            var size = (Math.log10(lines.length) << 0) + 1;
            //fixme: set size
        });
    }
	
	/**
	 * Decorates an object by ID string or element reference.
     *
     * The argument must either be an ID string (in which case the node
     * is fetched using document.getElementById()), or a node.
     *
     * @param {(string|Element)} item Item to be decorated.
	 */
	self["decorate"] = function(item)
	{
		// Grab the item by ID in case it's a string.
        if (typeof item == 'string' || item instanceof String) {
            item = document.getElementById(item);
        }
        // If it's a valid node, retrieve more information about it.
        if (item != null && item.nodeName !== null) {
            filters = self.get_applicable_filters(item);
        }
        else {
            return false;
        }
        // Error out if no applicable filters could be found.
        if (filters.length == 0) {
            window.console && console.warn("Could not decorate item: %o", item);
            return false;
        }
        
		// Now pass the item on to be decorated using the appropriate filters.
		DadaFW.perform_filters(item, filters);
		return true;
	}
	
	/**
	 * Analyzes a DOM node and returns a list of matching filters.
	 *
	 * This function checks which potential filters can be applied
	 * to it by looking at its ddfw-filter attribute.
	 *
	 * @param {Element} item DOM node to be analyzed.
	 */
	self.get_applicable_filters = function(item)
	{
	    // Get a list of the item's ddfw-filter attribute.
	    var classes = self.get_attr(item, "ddfw-filter");
	    
	    if (classes == null) {
	        return [];
	    }
	    // We'll keep copies of the filters that apply to this item.
	    var matches = [];
	    
	    var a, b;
	    for (a = 0; a < classes.length; ++a) {
	        for (b = 0; b < self.filters.length; ++b) {
	            if (classes[a] == self.filters[b][0]) {
	                matches.push(self.filters[b]);
	            }
	        }
	    }
	    
		return matches;
	}
	
	/**
	 * Returns a DOM node's attribute's value as separate items,
	 * separated by whitespace.
	 *
	 * @param {Element} item DOM node to by analyzed.
	 */
	self.get_attr = function(el, attr)
	{
	    return el.getAttribute(attr).match(/\S+/g);
	}
	
	/**
	 * Returns a DOM node's classes in an array.
	 *
	 * @param {Element} item DOM node to by analyzed.
	 */
	self.get_classes = function(item)
	{
	    return self.get_listed_attr(item, "class");
	}
    
    /**
     * Adds a class to a DOM element.
     *
     * @param {Element} element The element to add a class to.
     * @param {string} cls The class name to add.
     */
    self.add_class = function(element, cls)
    {
        element.className += " "+cls;
    }
    
    /**
     * Checks if an DOM element has a specific class.
     *
     * @param {Element} element The element to check.
     * @param {string} cls The class name to check for.
     * @return {boolean} Whether the element has the class.
     */
    self.has_class = function(element, cls)
    {
        return (" "+element.className+" ").indexOf(" "+cls+" ") > -1;
    }
	
	/**
	 * Runs basic initialization code for the framework.
	 */
	self.construct = function()
	{
	    // Register all framework components that require decoration.
	    self.register_default_filters();
	}
	
	// Manually call the constructor.
	self.construct();
	
	return self;
})();

/* All done. */
})();
