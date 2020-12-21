var app = new Vue({
    el: '#app',
    data: {
        newComment = '',
        comments: ['komentar1','komentar2','komentar3'],
        score: [5,5,5],
    },
    methods: {
        addComment: function (newComment) {
            this.comments.push(newComment),
            this.score.push(0),
            this.newComment = ''
        }
    }
})