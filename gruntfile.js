// Dada Web Framework <https://github.com/msikma/dadafw>
// Copyright (C) 2013-2015, Michiel Sikma <michiel@sikma.org> and contributors
// MIT licensed

module.exports = function(grunt) {
  // Helper function to print the copyright.
  function printCopyright() {
    grunt.log.writeln(
      'Dada Framework <http://github.com/msikma/dadafw/>'['cyan']
    );
    grunt.log.writeln(
      '(C) 2013-2015, Michiel Sikma <michiel@sikma.org>, MIT license'['green']
    );
  }

  // The directories we'll use for all tasks.
  var dirSource = './dadafw/';
  var dirBuild = './content/build/';

  // Hide task title log output.
  // See <https://github.com/gruntjs/grunt/issues/895>.
  grunt.log.header = function() { /* NOP */ };

  // List of compile jobs and their target files.
  // For every entry, we'll compile './dadafw/<entry>.scss' to
  // a corresponding target './content/build/<entry>.css'.
  var defaultTarget = 'dadafw';
  var entries = ['dadafw', 'grid-only', 'debug'];
  var targets = {};
  entries.forEach(function(entry) {
    var src = dirSource + entry + '.scss';
    var target = dirBuild + entry + '.css';
    var watch = [dirSource + 'lib/**/*.scss', dirSource + entry + '.scss'];
    targets[entry] = {
      watch: watch,
      files: {}
    };
    targets[entry].files[target] = src;
  });

  // Generate the Sass tasks that we'll be using. Release builds are
  // compressed to save space, and dev builds contain a source map.
  var optionsRelease = {
    sourceMap: false,
    outputStyle: 'compressed'
  };
  var optionsDev = {
    sourceMap: true,
    outputStyle: 'nested'
  };
  var sassOptions = {
    options: optionsRelease
  };
  // Generate '<entry>-release', '<entry>-dev'.
  entries.forEach(function(entry) {
    sassOptions[entry + '-release'] = {
      files: targets[entry].files
    };
    sassOptions[entry + '-dev'] = {
      files: targets[entry].files,
      options: optionsDev
    };
  });

  // Generate watch options. This is only for dev builds.
  var watchOptions = {};
  entries.forEach(function(entry) {
    watchOptions[entry] = {
      files: targets[entry].watch,
      tasks: ['sass:' + entry + '-dev']
    };
  });

  // Generate concurrent options. This starts a development server
  // and a watch server at the same time, making it possible to develop
  // using the dev server.
  var concurrentOptions = {};
  entries.forEach(function(entry) {
    concurrentOptions[entry] = {
      tasks: ['connect:dev', 'watch:' + entry]
    };
  });
  concurrentOptions['options'] = {
    logConcurrentOutput: true
  };

  // Initialize with our generated config objects.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    connect: {
      dev: {
        options: {
          port: 8080,
          base: './content/',
          keepalive: true
        }
      }
    },
    sass: sassOptions,
    watch: watchOptions,
    concurrent: concurrentOptions
  });

  // Compile task - used for making minified releases of all framework targets.
  // You can optionally specify a target name. If no target is specified,
  // all targets are compiled.
  grunt.registerTask('compile', 'Compile the framework', function(target) {
    printCopyright();
    if (target) {
      grunt.log.writeln('Compiling target: ' + target['cyan'] + '.');
      grunt.task.run('sass:' + target + '-release');
    } else {
      grunt.log.writeln('Compiling all framework targets.');
      entries.each(function(el) {
        grunt.task.run('sass:' + el + '-release');
      });
    }
  });

  // Develop task - starts a development server and rebuilds the desired
  // target upon any change to its relevant SCSS files.
  grunt.registerTask('dev', 'Start a development server', function(target) {
    printCopyright();
    if (!target) {
      target = defaultTarget;
    }
    grunt.log.writeln('Starting a development server.');
    grunt.log.writeln('Using target: ' + target['cyan'] + '.\n');

    // Run the Sass task once to get an initial file, then run the
    // concurrent task to watch and rebuild on changes.
    grunt.task.run('sass:' + target + '-dev');
    grunt.task.run('concurrent:' + target);
  });

  // Info task - used to display some basic usage information
  // when no task is specified.
  grunt.registerTask('info', 'Display build task info', function() {
    printCopyright();
    grunt.log.write(
      '\nError: No task specified.\n\n'['red'] +
      'usage: grunt [compile[:TARGET] | dev[:TARGET] | info]\n' +
      '\nTask runner configuration for Dada Framework.\n' +
      '\ntasks:\n' +
      '  compile[:TARGET]      Compiles the framework.\n' +
      '  dev[:TARGET]          Starts a development server.\n' +
      '  info                  Displays build task info.\n' +
      '\ntargets:\n' +
      '  dadafw (default), grid-only, debug\n' +
      '\nFor more information and a description of the targets, see\n' +
      'the Dada Framework page on Github <http://github.com/msikma/dadafw/>.\n'
    );
  });

  grunt.loadNpmTasks('grunt-contrib-connect');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-sass');
  grunt.loadNpmTasks('grunt-concurrent');
  grunt.registerTask('default', ['info']);
};
