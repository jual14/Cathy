var gulp = require('gulp');
var acss = require('gulp-atomizer');

gulp.task('atomize', function() {
    return gulp.src('./*.php')
        .pipe(acss())
        .pipe(gulp.dest('dist'));
});

gulp.task('watch', function () {
    gulp.watch('./*.php', ['atomize']);
});

gulp.task('default',[
    'atomize',
    'watch'
]);