module.exports = function(grunt)
{
  var dirBase = 'dadafw/',
      dirBuild = 'build/';

  grunt.log.write(
    'Dada Framework\n' +
    '(C) 2013-2015, Michiel Sikma <info@michielsikma.com>, MIT license\n'
  );

  // List of compile jobs and their target files.
  var files = {
    dadafw: {},
    gridOnly: {}
  };
  files.dadafw[dirBuild + 'dadafw.css'] = dirBase + 'dadafw.scss';
  files.gridOnly[dirBuild + 'grid-only.css'] = dirBase + 'grid-only.scss';

  // Standard options for the Sass task. We generate a source map
  // when using the watch job.
  var optionsRelease = {
    sourceMap: false,
    outputStyle: 'compressed'
  };
  var optionsDev = {
    sourceMap: true,
    outputStyle: 'nested'
  };

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    sass: {
      options: optionsRelease,
      'grid-only-release': {
        files: files.gridOnly
      },
      'grid-only-dev': {
        files: files.gridOnly,
        options: optionsDev
      },
      'dadafw-release': {
        files: files.dadafw
      },
      'dadafw-dev': {
        files: files.dadafw,
        options: optionsDev
      }
    },
    watch: {
      'dadafw': {
        files: dirBase + '**/*.scss',
        tasks: ['sass:dadafw-dev']
      },
      'grid-only': {
        files: dirBase + '**/*.scss',
        tasks: ['sass:grid-only-dev']
      }
    }
  });
  grunt.registerTask('compile', 'Compiles the complete framework', function() {
    grunt.log.write('Compiling the complete framework.\n');
    grunt.task.run('sass:dadafw-release');
  });

  grunt.loadNpmTasks('grunt-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.registerTask('default', ['compile']);
};
