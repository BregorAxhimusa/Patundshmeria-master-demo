<?php include "../../includes/header.php" ?>
<div class="container-fluid">
    <div class="mt-5">
        <h5>Veshtrimi i Idivideve</h5>
    </div>
    <div class="col-lg-12">
        <div class="search-table input-group col-lg-4 col-12 mt-5 ml-auto">
            <div class="search input-group-prepend ">
                <span class="input-group-text">
                    <img src="../../assets/images/Group 54.png" class="ml-3" alt="">
                </span>
            </div>
            <input class="form-control search f-focus" type="text" placeholder="Filtro" aria-label="Search"
                id="searchInput">
        </div>
        <div class="t-table mt-2">
            <table class="table">
                <thead class="thead">
                    <tr>
                        <th scope="col">Nr</th>
                        <th scope="col">Emri Mbiemri</th>
                        <th scope="col">Fotografia</th>
                        <th scope="col">Email</th>
                        <th scope="col">Postimet</th>
                        <th scope="col">Data regjistrimit</th>
                        <th scope="col">Statusi</th>
                        <th scope="col">Option</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Filan Fisteku</td>
                        <td>
                            <img src="../../assets/images/mikita-yo-HupLwltbW3k-unsplash.jpg"
                                class="rounded-circle ml-2" height="30px" width="30px" alt="">
                        </td>
                        <td>filanfisteku@gmail.com</td>
                        <td>22</td>
                        <td>11/11/1111</td>
                        <td>Biznes</td>
                        <td class="o-option">
                            <a href="">
                                <img src="../../assets/images/Group 53.png" height="15px" alt="">
                            </a>
                            <a href="">
                                <img src="../../assets/images/Icon feather-trash.png" class="ml-lg-1" height="20px"
                                    alt="">
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include "../../includes/footer.php" ?>