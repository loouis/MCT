module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    uglify: {
      build: {
        src: [ 'js/libs/bxslider.js', 'js/global.js'], //input
        dest: './js/build/global.min.js' //output
      }
    },

    sass: {
      dist: {
        options: {
          style: 'compressed', //compressed, expanded…,
          sourcemap: true
        },
        files: {
          'styles/prebuild/style.css': 'styles/style.scss',
        }
      }
    },

    autoprefixer: {
    options: {
        browsers: ['last 2 version', 'ie 8', 'ie 9']
      },
      multiple_files: {
        expand: true,
        flatten: true,
        src: 'styles/prebuild/style.css',
        dest: './'
      }
    },

    // connect: {
    //   server: {
    //     options: {
    //       port: 8765,
    //       livereload: true,
    //       open: true,
    //       base: ['./build'],
    //       middleware: function(connect, options) {
    //         var middlewares;
    //         middlewares = [];
    //         middlewares.push(modRewrite(['^[^\\.]*$ /index.html [L]']));
    //         options.base.forEach(function(base) {
    //           return middlewares.push(connect["static"](base));
    //         });
    //         return middlewares;
    //       }
    //     }
    //   }
    // },

    // imagemin: {
    //    dynamic: {
    //     files: [{
    //       expand: true,
    //       cwd: 'images/',
    //       src: ['**/*.{png,jpg,gif}'],
    //       dest: 'images/images'
    //     }]
    //   }
    // },


    // criticalcss: {
    //   custom: {
    //     options: {
    //         url: "http://www.boilingtap.com",
    //         width: 1300,
    //         height: 1200,
    //         outputfile: "critical.css",
    //         filename: "style.css",
    //     }
    //   }
    // },


    // jade: {
    //   compile: {
    //       options: {
    //           // client: false,
    //           pretty: true
    //       },
    //       files: [ {
    //         cwd: "src/templates",
    //         src: '*.jade',
    //         dest: './build',
    //         expand: true,
    //         ext: ".html"
    //       } ]
    //   }
    // },

    svgstore: {
      options: {
        prefix: "",
        cleanup: ['fill', 'style'],
        svg:{
          xmlns: 'http://www.w3.org/2000/svg'
          // style: "display:none;"
        }
      },
      default : {
        files: {
          './build/assets/images/svg-defs.svg': ['src/assets/images/svg/*.svg'],
        },
      },
    },

    // browserSync: {
    //     dev: {
    //         bsFiles: {
    //             src : [
    //                 'build/css/*.css',
    //                 'build/*.html'
    //             ]
    //         },
    //         options: {
    //             watchTask: true,
    //             server: './build'
    //         }
    //     }
    // },

    svgmin: {
      dist: {
        files: [{
          expand: true,
          cwd: 'images/svg',
          src: ['*.svg'],
          dest: 'images/svg'
        }]
      }
    },


    watch:{
       options: {
          livereload: true,
        },
        scripts: {
          files: ['scripts/**/*.js'],
          tasks: ['uglify'],
          options: {
            spawn: false,
          }
        },


        css: {
          files: ['**/**/**/*.scss'],
          tasks: ['sass', 'autoprefixer'],
          options: {
            spawn: false,
          }
        },
        images: {
          files: ['images/**/*.{png,jpg,gif}', 'images/*.{png,jpg,gif}'],
          tasks: ['imagemin'],
          options: {
            spawn: false,
          }
        },

        svg:{
          files: 'images/svg/*',
          tasks: 'default'
        },
        html:{
          files: ['./**/*.html'],
          tasks: [],
          options: {
            spawn: false
          }
        }
      },

      jshint: {
        all: ['js/*.js']
      }


  });

  // Load the tasks.
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-autoprefixer');
  grunt.loadNpmTasks('grunt-contrib-connect');
  grunt.loadNpmTasks('grunt-contrib-imagemin');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  // grunt.loadNpmTasks('grunt-criticalcss');
  grunt.loadNpmTasks('grunt-svgstore');
  grunt.loadNpmTasks('grunt-contrib-jade');
  modRewrite = require('connect-modrewrite');
  grunt.loadNpmTasks('grunt-browser-sync');
  // Load local tasks.
  grunt.loadNpmTasks( 'grunt-contrib-watch' );
  grunt.loadNpmTasks( 'grunt-svgmin' );
  grunt.loadNpmTasks('grunt-grunticon');

  //load parent grunti
  // grunt.loadTasks('./tasks');

  // Default task(s).
  grunt.registerTask('default', ['sass','uglify','svgstore' ,'autoprefixer', 'watch']);
  // grunt.registerTask('critical', ['criticalcss', 'svgstore' , 'grunticon:myIcons' ]);
  // Default task.
  grunt.registerTask('svg', [ 'svgmin', 'grunticon']);
// 'svgstore',

};

// 'imagemin'
