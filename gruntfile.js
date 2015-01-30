module.exports = function(grunt)
{

  var dirBase = 'dadafw/',        // ├─ dadafw/
    dirDocs = 'docs/',          // ├─ docs/
    dirBuild = 'build/',         // ├─ build/
    dirBuildCSS = 'css/',         // ├─── css/
    dirBuildFonts = 'fonts/',       // ├─── fonts/
    dirBuildSprites = 'sprites/';   // ├─── sprites/

// Write project info to console.
  grunt.log.write(
    'Dada Framework\n' +
    '(C) 2013-2015, Michiel Sikma <info@michielsikma.com>, MIT license\n'
  );

// Only one SCSS file needs to be compiled.
  var filesSCSS = {};
  filesSCSS[dirBuild + dirBuildCSS + "dadafw.css"] = dirBase + "scss/dadafw.scss";

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
      },
      dev: {
        files: filesSCSS,
        options: {
          sourceMap: true,
          outputStyle: 'nested'
        }
      }
    },
    watch: {
      css: {
        files: dirBase + 'scss/**/*.scss',
        tasks: ['sass:dev']
      }
    }
  });
  grunt.registerTask('compile', 'Compiles the complete framework', compile);

  grunt.loadNpmTasks('grunt-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.registerTask('default', ['compile']);

};
