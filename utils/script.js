document.addEventListener('DOMContentLoaded', () => {
    $(document).ready(function () {
            $('#search-data').unbind().keyup(function (e) {
                    console.log("lol");
                    var value = $(this).val();
                    if (value.length > 3) {
                        searchData(value);
                    } else {
                        $('#search-result-container').hide();
                    }
                }
            );
        }
    );

    function searchData(val) {
        let xmlhttp = new XMLHttpRequest();
        $('#search-result-container').show();
        $('#search-result-container').html('<div><img src="preloader.gif" width="50px;" height="50px"> <span style="font-size: 20px;">Please Wait...</span></div>');
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                //document.getElementById("search-result-container").innerHTML = this.response;
                $('#search-result-container').html(this.response);
            } else {
                $('#search-result-container').html("<div class='search-result'>No Result Found...</div>");
            }
        };
        let data = new FormData();
        data.append('autocomplete', val);
        xmlhttp.open("POST", '/ContriBooks/Template', true);
        xmlhttp.send(data);
    }


    // $(document).ready(function () {
    //         $('#posting').click(function () {
    //                 // var valueCom = $(this).val();
    //
    //                 searchData($('#comment-data').val(), $('#score-data').val());
    //                 // }
    //                 // else {
    //                 //     $('#comment-container').hide();
    //                 // }
    //             }
    //         );
    //     }
    // );
    // $(document).ready(function () {
    //         $('#editing').click(function () {
    //                 searchData($('#comment-data').val(), $('#score-data').val());
    //
    //             }
    //         );
    //
    //     }
    // );
    //
    //
    // function searchData(valCom, valScore) {
    //     let xmlhttp = new XMLHttpRequest();
    //     $('#comment-container').show();
    //     xmlhttp.onreadystatechange = function () {
    //         if (this.readyState == 4 && this.status == 200) {
    //             $('#comment-container').html(this.response);
    //
    //         } else {
    //             document.getElementById("comment-container").innerHTML = this.response;
    //             console.log(this.response);
    //         }
    //     };
    //     let data = new FormData();
    //     data.append('score', valScore);
    //     data.append('comment', valCom);
    //     xmlhttp.open("POST", '/ContriBooks/Book', true);
    //     xmlhttp.send(data);
    // }
})