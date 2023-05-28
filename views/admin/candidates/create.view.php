<?php require base_path('views/partials/head.php') ?>

    <div class="app">

        <?php require base_path('views/admin/partials/head.php') ?>
        <?php require base_path('views/admin/partials/sidebar.php') ?>

        <main class="app-main">
            <div class="wrapper">
                <div class="page">
                    <div class="page-inner">
                        <header class="page-title-bar">
                            <h1 class="page-title text-truncate">
                                <i class="fas fa-user-graduate fa-fw mr-2 text-muted"></i>
                                Dalaşgär goşmak
                            </h1>
                        </header>
                        <div class="page-section">
                            <div class="section-block">
                                <div class="card card-body">
                                    <form method="post" action="/admin/candidates" autocomplete="off"
                                          onsubmit="disableSubmitButton();">
                                        <div class="row">
                                            <div class="col-md-6 col-lg-4">
                                                <div class="form-group">
                                                    <label for="Hunar">Hünäri</label>
                                                    <select class="custom-select" id="Hunar" name="Hunar">
                                                        <option value="">-----------</option>
                                                        <option
                                                            value="Dänäni saklamagyň we gaýtadan işlemegiň tehnlogiýasy">
                                                            Dänäni saklamagyň we gaýtadan işlemegiň tehnlogiýasy
                                                        </option>
                                                        <option value="Ykdysadyýet we meýilnamalaşdyryş">
                                                            Ykdysadyýet we meýilnamalaşdyryş
                                                        </option>
                                                        <option value="Çörek, süýji we unaş önümleriniň tehnlogiýasy">
                                                            Çörek, süýji we unaş önümleriniň tehnlogiýasy
                                                        </option>
                                                        <option
                                                            value="Oba hojalyk önümleriniň tehnlogiýasy we gaýtadan işlenilmegi">
                                                            Oba hojalyk önümleriniň tehnlogiýasy we gaýtadan işlenilmegi
                                                        </option>
                                                        <option value="Turşatma önümçiliginiň we çakyryň tehnlogiýasy">
                                                            Turşatma önümçiliginiň we çakyryň tehnlogiýasy
                                                        </option>
                                                        <option value="Buhgalterçilik hasaba alnyşy">
                                                            Buhgalterçilik hasaba alnyşy
                                                        </option>
                                                        <option
                                                            value="Pagtany ilkinji işläp taýýarlamagyň tehnlogiýasy">
                                                            Pagtany ilkinji işläp taýýarlamagyň tehnlogiýasy
                                                        </option>
                                                        <option value="Ösümlikleri goramak">Ösümlikleri goramak</option>
                                                        <option value="Weterinariýa">Weterinariýa</option>
                                                        <option value="Ýer ulanylyşy">Ýer ulanylyşy</option>
                                                        <option value="Tokaý we seýilgäh hojalygy">
                                                            Tokaý we seýilgäh hojalygy
                                                        </option>
                                                        <option value="Oba hojalygynyň mehanizasiýasy">
                                                            Oba hojalygynyň mehanizasiýasy
                                                        </option>
                                                        <option value="Agrohimiýa">Agrohimiýa</option>
                                                        <option value="Maglumat ulgamlary">Maglumat ulgamlary</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-4">
                                                <div class="form-group">
                                                    <label for="Oglan_gyz">Jynsy</label>
                                                    <select class="custom-select" id="Oglan_gyz" name="Oglan_gyz">
                                                        <option value="">--------</option>
                                                        <option value="Oglan">Oglan</option>
                                                        <option value="Gyz">Gyz</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-4">
                                                <div class="form-group">
                                                    <label for="gelin">Gelin</label>
                                                    <select class="custom-select" id="gelin" name="gelin">
                                                        <option value="">-----------</option>
                                                        <option value="Hawa">Hawa</option>
                                                        <option value="Ýok">Ýok</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-4">
                                                <div class="form-group">
                                                    <label for="Welayat">Welaýat</label>
                                                    <select class="custom-select" id="Welayat" name="Welayat">
                                                        <option value="">-----------</option>
                                                        <option value="Aşgabat">Aşgabat</option>
                                                        <option value="Ahal">Ahal</option>
                                                        <option value="Balkan">Balkan</option>
                                                        <option value="Daşoguz">Daşoguz</option>
                                                        <option value="Lebap">Lebap</option>
                                                        <option value="Mary">Mary</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-4">
                                                <div class="form-group">
                                                    <label for="Etrap">Etrap</label>
                                                    <select class="custom-select" id="Etrap" name="Etrap">
                                                        <option value="">-----------</option>
                                                        <option value="Köpetdag etr.">Köpetdag etr.</option>
                                                        <option value="Bagtyýarlyk etr.">
                                                            Bagtyýarlyk etr.
                                                        </option>
                                                        <option value="Berkararlyk etr.">
                                                            Berkararlyk etr.
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-4">
                                                <div class="form-group">
                                                    <label for="tabsyran_senesi">Tabşyran senesi</label>
                                                    <input id="tabsyran_senesi" name="tabsyran_senesi" type="text" class="form-control" placeholder="Tabşyran senesi">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-4">
                                                <div class="form-group">
                                                    <label for="FAA">FAA</label>
                                                    <input id="FAA" name="FAA" type="text" class="form-control" placeholder="FAA">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-4">
                                                <div class="form-group">
                                                    <label for="Doglan_senesi">Doglan senesi</label>
                                                    <input id="Doglan_senesi" name="Doglan_senesi" type="text" class="form-control" placeholder="Doglan senesi">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <button type="submit"
                                                    class="btn btn-primary d-flex align-items-center justify-content-center"
                                                    id="submit-button">
                                                <span id="loading" class="spinner-border spinner-border-sm d-none mr-2"
                                                      role="status" aria-hidden="true"></span> Goşmak
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php require base_path('views/admin/partials/footer.php') ?>

        </main>
    </div>

<?php require base_path('views/partials/footer.php') ?>