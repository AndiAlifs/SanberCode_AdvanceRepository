var app = new Vue({
    el: '#app',
    data: {
        content: '',
        edit: -1,
        name: ['Muhammad iqbal mubarak', 'Ruby Prwanti', 'Faqih Muhammad']
    },
    methods: {
        addName: function() {
            if (this.edit != -1){
                this.name[this.edit] = this.content
                this.edit = -1
                this.content = '';
            } else {
                this.name.push(this.content),
                this.content = '';
            }
        },
        removeName: function (index) {
            this.name.splice(index, 1);  
        },
        editName: function (index) {
            this.content = this.name[index]
            this.edit = index
        }
    }
})