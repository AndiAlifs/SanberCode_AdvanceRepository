var app = new Vue({
    el: '#app',
    data: {
        content: '',
        name: ['Muhammad iqbal mubarak', 'Ruby Prwanti', 'Faqih Muhammad']
    },
    methods: {
        addName: function() {
            this.name.push(this.content),
            this.content = '';
        }
    }
})