<?php  $this->_t = 'Search'; ?>


<div>
    <div class="d-inline">
        <select class="dropdown-select-inner" id="selectGenre">
            <option value="0">Par genres</option>
            <option value="2">BD</option>
            <option value="1">Roman</option>
            <option value="9">Sciences</option>
        </select>
        <select class="dropdown-select-inner" id="selectType">
            <option value="0">Par Types</option>
            <option value="1">Fantastique</option>
            <option value="2">Comics</option>
            <option value="9">Biologie</option>
        </select>
    </div>
    <div class="d-inline">
        <h2><a>Nouveautés</a></h2>
        <ul class="nav justify-content-center mw-25">
            <?php foreach($newBooks as $book): ?>
                <?php $ISBN = $book->getISBN();
                $img_link = "$ISBN".'.jpg';
                $filename = 'utils/media/img/book/'.$img_link;
                ?>
                <li class="nav-item book-list" genre="<?= $book->getId_genre()?>" type="<?= $book->getId_type()?>" author="<?= $book->getId_author()?>" style="display:block;">
                    <img class="d-inline-flex p-2" src="<?= $filename ?>" style="width: 150px; height: 204px">
                    <a class="nav-link" href="viewBook.php?ISBN=<?= $ISBN ?>"><?= $book->getTitle_book() ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>

<script>

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