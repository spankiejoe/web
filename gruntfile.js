module.exports = function(grunt) {

    // Project configuration.
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        'ftp-deploy': {
            build: {
                auth: {
                    host: 'gaze.io',
                    port: 21,
                    authKey: 'xr'
                },

                src: '.',
                dest: '/www.gazeio/',
                exclusions: ['./**/.*', './**/node_modules', 'gruntfile.js', 'package.json' ]
            },
        },

  });

  grunt.loadNpmTasks('grunt-ftp-deploy');

  // Default task(s).
  grunt.registerTask('default', ['ftp-deploy']);

};
