let Api = {
    add: 'reviewAdd.php',
    show: 'reviewList.php'
};
class Review {
	constructor() {
        this.reviews = [];
        this.submit = [];
        this.setEventsAdd();
        this.request(Api.show)
    }
    request(url, data) {
        $.ajax({
            method: "POST",
            url: url,
            data: data,
            dataType: 'json',
            context: this,
            error: function (request, status, error) {
                console.log(error);
            },
        }).done(function(response) {
            if (url == Api.add) {
                alert(response);
            } else if (url == Api.show) {
                this.showReviews(response);
            };
        });
    }
    setEventsAdd() {
        let self = this;
        document.querySelector('#btn_submit').addEventListener('click', function() {
            self.onAdd(event);
        });
    }
    onAdd(event){
        let self = this;
        let item = {};

        let formName = document.querySelector("#name");
        let formText = document.querySelector("#textReview");      

        item.user_name = formName.value;
        item.review_text = formText .value;

        if (!item.user_name || !item.review_text) {
            formName.setAttribute('class', formName.className + ' error');
            formText.setAttribute('class', formText.className + ' error');
            alert('Необходимо заполнить все поля!');
            return;
        } else {
            formName.removeAttribute('class');
            formName.setAttribute('class', 'form-control');
            formText.removeAttribute('class');
            formText.setAttribute('class', 'form-control');
        }
        
        this.reviews.push(item);
        console.log(this.reviews);

        this.showAddReview(item);
        this.request(Api.add, item);

        document.querySelector("#name").value = '';
        document.querySelector("#textReview").value = '';
    }
    showReviews(arr){       
        let self = this;
        let reviewsFields = document.querySelector('.reviewsFields');

        for (let i = 0; i < arr.length; i++) {
            self.renderReview(arr[i], reviewsFields);
        }
    }
    showAddReview(obj){       
        let self = this;
        let reviewsFields = document.querySelector('.reviewsFields');

        self.renderReview(obj, reviewsFields);
    }
    renderReview(item, div) {
        let reviewField = document.createElement('div');
        reviewField.className = 'reviewField';
        div.appendChild(reviewField);

        let reviewItemName = document.createElement('b');
        reviewItemName.innerHTML = item.user_name;
        reviewField.appendChild(reviewItemName);

        let reviewItemReview = document.createElement('p');
        reviewItemReview.innerHTML = item.review_text;
        reviewField.appendChild(reviewItemReview);

        let line = document.createElement('hr');
        reviewField.appendChild(line);
    }    
};

$( window ).on( "load", function(){
	window.cart = new Review();
});
