module.exports = function(grunt) {

var dirBase         = 'dadafw/',    // ├─ dadafw/
    dirDocs         = 'docs/',      // ├─ docs/
    dirBuild        = 'build/',     // ├─ build/
    dirBuildCSS     = 'css/',       // ├─── css/
    dirBuildJS      = 'js/',        // ├─── js/
    dirBuildFonts   = 'fonts/',     // ├─── fonts/
    dirBuildSprites = 'sprites/';   // ├─── sprites/

grunt.log.write(
    'Dada Framework\n'+
    '(C) 2013-2014, Michiel Sikma <info@michielsikma.com>, MIT license\n'
);


// List of the CSS files we'll generate.
var filesSCSS = {};
filesSCSS[dirBuild+dirBuildCSS+"dadafw.css"] = dirBase+"scss/dadafw.scss";

/**
 * Compiles the complete framework.
 */
function compile()
{
    grunt.log.write('Compiling the complete framework.\n');
    grunt.task.run('sass');
}

grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    sass: {
        options: {
            sourceMap: false,
            outputStyle: 'compressed'
        },
        dist: {
            files: filesSCSS
        }
    },
    watch: {
        css: {
            files: dirBase+'scss/**/*.scss',
            tasks: ['sass'],
            options: {
                sourceMap: true,
                outputStyle: 'nested'
            }
        }
    }
});
grunt.registerTask('compile', 'Compiles the complete framework', compile);

grunt.loadNpmTasks('grunt-sass');
grunt.loadNpmTasks('grunt-contrib-watch');
grunt.registerTask('default', ['compile']);

};