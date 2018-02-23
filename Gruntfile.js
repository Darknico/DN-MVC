module.exports = function (grunt) {

    grunt.initConfig({
        cssmin: {
            my_target: {
                src: 'styles/main.css',
                dest: 'styles/main.min.css'
            }
        }
    });

    // Qui inizializzerai i plugin
    grunt.loadNpmTasks('grunt-css');
    // Qui definirai i task
    grunt.registerTask('default', ['cssmin']);

};