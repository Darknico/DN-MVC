module.exports = function (grunt) {

    grunt.initConfig({
        cssmin: {
            my_target: {
                src: 'styles/main.css',
                dest: 'styles/main.min.css'
            }
        },
        uglify: {
            my_target: {
                files: {
                    'scripts/scripts.min.js': ['scripts/scripts.js']
                }
            }
        }
    });

    // init plugin
    grunt.loadNpmTasks('grunt-css');
    grunt.loadNpmTasks('grunt-contrib-uglify');


    // tasks
    grunt.registerTask('default', ['cssmin']);
    grunt.registerTask('compile-css', ['cssmin']);
    grunt.registerTask('compile-js', ['uglify']);

};