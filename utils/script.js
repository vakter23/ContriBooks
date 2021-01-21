document.addEventListener('DOMContentLoaded', () => {
    $(document).ready(function() {
            $('#search-data').unbind().keyup(function(e) {
                    var value = $(this).val();
                    if (value.length>3) {
                        searchData(value);
                    }
                    else {
                        $('#search-result-container').hide();
                    }
                }
            );
        }
    );
    function searchData(val){
        const xhr = new XMLHttpRequest();
        xhr.open('GET', 'https://jsonplaceholder.typicode.com/posts/1');
        xhr.responseType = 'json';
        xhr.onload = function(e) {
            if (this.status == 200) {
                console.log('response', this.response); // JSON response
            }
        };
        xhr.send();
        let xmlhttp = new XMLHttpRequest();
        $('#search-result-container').show();
        $('#search-result-container').html('<div><img src="preloader.gif" width="50px;" height="50px"> <span style="font-size: 20px;">Please Wait...</span></div>');
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                //console.log("lol");
                console.log(this.response);
                //let myObj = JSON.parse(this.response);
                document.getElementById("search-result-container").innerHTML = this.response;
                //$('#search-result-container').html(this.response);
            }
            // else {
            //     console.log("lolElse");
            //     $('#search-result-container').html("<div class='search-result'>No Result Found...</div>");
            // }
        };
        xmlhttp.open("POST", 'models/ControlManager.php', true);
        xmlhttp.send("action=autocomplete&autocomplete=" + val);
    }
})