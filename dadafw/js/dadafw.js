/** @preserve
 * Dada Framework <https://github.com/msikma/DadaFW>
 * (C) 2013-2014, Michiel Sikma <info@michielsikma.com> and Dada Framework contributors
 * For a full list of contributors, view the project commit history.
 * @author Michiel Sikma
 *
// ==ClosureCompiler==
// @output_file_name dadafw.min.js
// @compilation_level ADVANCED_OPTIMIZATIONS
// ==/ClosureCompiler==
 */
;(function(){

/**
 * @namespace Dada Framework frontend code
 */
window.DadaFW = {};

/**
 * Main interface code.
 *
 * @static
 */
DadaFW["Main"] = (function()
{
	var self = this;
	
	self["add_etc"] = function($el, info)
	{
		DadaFW.Debug["info"]("DadaFW::Main.add_page(): test \"%s\"", [slug]);
	}
	
	/**
     * Cross-browser DOMContentLoaded wrapper (version 1.2)
     *
     * Takes a window object and function; the function is executed after
     * DOM is loaded and ready, regardless of the browser used.
     * 
     * Written by Diego Perini <diego.perini@gmail.com> and released under
     * the MIT license. Slightly modified for this project. For more
     * information, see <https://github.com/dperini/ContentLoaded>.
     *
     * @param {Window} win Window object.
     * @param {function(...)} fn Function to execute.
     */
    self.content_loaded = function(win, fn)
    {
        var done = false, top = true,
    
        doc = win.document, root = doc.documentElement,
    
        add = doc.addEventListener ? "addEventListener" : "attachEvent",
        rem = doc.addEventListener ? "removeEventListener" : "detachEvent",
        pre = doc.addEventListener ? "" : "on",
    
        init = function(e)
        {
            if (e.type == "readystatechange" && doc.readyState != "complete") {
                return;
            }
            (e.type == "load" ? win : doc)[rem](pre + e.type, init, false);
            if (!done && (done = true)) {
                fn.call(win, e.type || e);
            }
        },
    
        poll = function()
        {
            try {
                root.doScroll("left");
            }
            catch(e) {
                setTimeout(poll, 50); return;
            }
            init("poll");
        };
    
        if (doc.readyState == "complete") {
            fn.call(win, "lazy");
        }
        else {
            if (doc.createEventObject && root.doScroll) {
                try {
                    top = !win.frameElement;
                }
                catch(e) {
                }
                if (top) {
                    poll();
                }
            }
            doc[add](pre+"DOMContentLoaded", init, false);
            doc[add](pre+"readystatechange", init, false);
            win[add](pre+"load", init, false);
        }
    }
	
	return self;
})();

/**
 * Handles dynamic content decoration as the page loads. Every dynamic
 * item (page navigation, photosets, etc.) passes through here first.
 *
 * @static
 */
DadaFW["Deco"] = (function()
{
	var self = this;
	
	/**
	 * Adds the appropriate frontend code to an element by its selector.
	 * 
	 * @param {string} selector Selector targeting the DOM element
	 */
	self["add"] = function(selector)
	{
		Hrc.Debug["info"]("Hrc::Decorator.add(): adding selector \"%s\"", [selector]);
		
		var item = self.get_item(selector);
		if (item == null) {
			return false;
		}
		var $el = item.$el;
		var info = item.info;
		
		/* For everything else. */
		DadaFW["Main"]["add_etc"]($el, info);
		return true;
	}
	
	/**
	 * Selects an item by its selector, determines its purpose, then returns
	 * the info to be further processed.
	 * 
	 * @param {string} selector Selector targeting the DOM element
	 */
	self.get_item = function(selector)
	{
		var $el = $(selector);
		if (!$el[0]) {
			Hrc.Debug["info"]("Hrc::Decorator.get_item(): couldn't find DOM element for selector \"%s\"", [selector]);
			return null;
		}
		var info = self["get_item_info"]($el);
		return {el: $el[0], $el: $el, info: info};
	}
	
	self["get_item_info"] = function($el)
	{
		var info = {
		};
		return info;
	}
	
	return self;
})();

/**
 * Console debugging function.
 *
 * @static
 */
DadaFW.Debug = (function()
{
	var self = this;
	var permit_debug = true;
	
	/**
	 * Turns debugging on or off. When off, debug calls silently fail.
	 */
	self["permit_debugging"] = function(permit)
	{
		permit_debug = permit;
	}
	
	self["info"] = function(str, vars)
	{
		return self["log"](str, vars, "info");
	}
	
	self["warn"] = function(str, vars)
	{
		return self["log"](str, vars, "warn");
	}
	
	self["error"] = function(str, vars)
	{
		return self["log"](str, vars, "error");
	}
	
	/**
	 * Prints formatted messages to the console in case there's a console
	 * available. If there's no console, nothing happens.
	 * 
	 * @param {string} str String to print to the console
	 * @param {Array} vars Variables to use for string formatting
	 * @param {string} [func="log"] Severity level of log
	 */
	self["log"] = function(str, vars, func)
	{
		if (permit_debug != true
		||  window.console == null) {
			return;
		}
	
		func = func == null ? "log" : func;
		vars = vars == null ? [] : vars;
		if (vars.constructor.toString().indexOf("Array") == -1) {
			vars = [vars];
		}
		vars.unshift(str);
		console[func].apply(console, vars);
	}
	
	return self;
})();

/* All done. */
})();
