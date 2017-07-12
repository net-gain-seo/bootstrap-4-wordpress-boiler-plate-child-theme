module.exports = function(grunt) {
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		banner: '/*! <%= pkg.name %> - v<%= pkg.version %> */\n',

		sass: {
			dist: {
				files: [{
					expand: true,
					cwd: 'src/scss',
					src: ['**/*.scss'],
					dest: 'src/css',
					ext: '.css'
				}]
			}
		},
		watch: {
			css: {
				files: 'src/scss/**/*.scss',
				tasks: ['sass']
			}
		}
	});


	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');

	grunt.registerTask('default',['watch']);
	grunt.registerTask('build',['sass']);
}