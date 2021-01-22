<?php  $this->_t = 'Search'; ?>

<div class="container">
<div class="row">
    <div class="col-6 col-md-4">
        <div class="filter-sidebar">
            <div class="row card-body py-2 mb-3 twhite" style="background-color: #0151BF;padding-top: 25px;">
                <h4 class="text-light">Search Options</h4>
            </div>
            <div class="form-group">
                <select class="form-control" id="selectGenre">
                    <option value="0">Par genres</option>
                    <option value="2">BD</option>
                    <option value="1">Roman</option>
                    <option value="9">Sciences</option>
                </select>
            </div>
            <div class="form-group">
                <select class="form-control" id="selectType">
                    <option value="0">Par Types</option>
                    <option value="1">Fantastique</option>
                    <option value="2">Comics</option>
                    <option value="9">Biologie</option>
                </select>
            </div>
            <hr>
            <button type="btn" class="btn btn-primary">Find Now</button>
            <button type="btn" class="btn btn-primary">Reset All</button>
            <div class="pb-3"></div>
        </div>
    </div>
    <div class="col-12 col-md-8">
        <div class="d-flex flex-column">
            <?php foreach($newBooks as $book): ?>
                <?php $ISBN = $book->getISBN();
                $img_link = "$ISBN".'.jpg';
                $filename = 'utils/media/img/book/'.$img_link;
                if(!file_exists($filename)) $filename = 'utils/media/img/book/NotFound.jpg';
                ?>
                <div class="p-2 nav-item book-list test" genre="<?= $book->getId_genre()?>" type="<?= $book->getId_type()?>" author="<?= $book->getId_author()?>"">
                    <div class="row border border-primary" style="background-color: #B9C6CE">
                        <div class="col border-right border-primary">
                            <img class="d-inline-flex p-2" src="<?= $filename ?>" style="width: 150px; height: 200px">
                        </div>
                        <div class="col-6">
                            <a class="font-weight-bold" style="font-size: 20px;" href="/Contribooks/Book?ISBN=<?= $ISBN ?>"><?= $book->getTitle_book() ?></a>
                            <p style="font-size: 15px;">
                                <?= mb_strimwidth($book->getSynopsis_book(), 0, 240," ..."); ?>
                            </p>
                        </div>
                        <div class="col text-center ">
                            <p class="border border-primary rounded-circle" style="font-size: 55px; margin-top: 55px;padding: 10px;"><?= $book->getRate() ?></p>
                        </div>
                    </div>

                </div>
         <?php endforeach; ?>
        </div>
    </div>
</div>
</div>
<script type="text/javascript">

    const books = document.querySelectorAll('.book-list');
    let filters = [null, null, null];

    document.getElementById('selectGenre').addEventListener('change', function() {
        filters[1] = this.value;
        applyFilters();
    });

    document.getElementById('selectType').addEventListener('change', function() {
        filters[2] = this.value;
        applyFilters();
    });

    document.getElementById('selectType').addEventListener('change', function() {
        filters[3] = this.value;
        applyFilters();
    });

    function applyFilters() {
        let number=0;
        for(let filter of filters) {
            if(filter == 0) {
                number++;
            }
        }
        if(number == 3) {
            for(let book of books) {
                book.setAttribute("style", "display:block;");
                console.log("if");
            }
        }
        else {
            for(let book of books) {
                if(book.attributes.item(4) != null) {
                    book.setAttribute("style", "display:block;");
                }
                if (filters[1] == 0) {
                    book.setAttribute("style", "display:block;");
                }
                else if (filters[1] != null && book.attributes.item(1).value !== filters[1]) {
                    book.setAttribute("style", "display:none;");
                }
                if (filters[2] == 0) {
                    book.setAttribute("style", "display:block;");
                }
                else if (filters[2] != null && book.attributes.item(2).value !== filters[2]) {
                    book.setAttribute("style", "display:none;");
                }
                if (filters[3] == 0) {
                    book.setAttribute("style", "display:block;");
                }
                else if (filters[3] != null && book.attributes.item(3).value !== filters[3]) {
                    book.setAttribute("style", "display:none;");
                }
            }
        }
    }
</script>