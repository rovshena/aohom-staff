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
                                Dalaşgär üýtgetmek
                            </h1>
                        </header>
                        <div class="page-section">
                            <div class="section-block">
                                <div class="card card-body">
                                    <form method="post" action="/admin/candidate" autocomplete="off"
                                          onsubmit="disableSubmitButton();">
                                        <input type="hidden" name="_method" value="PUT">
                                        <input type="hidden" name="id" value="<?= $candidate['id'] ?>">
                                        <div class="row">
                                            <div class="col-md-6 col-lg-4">
                                                <div class="form-group">
                                                    <label for="Hunar">Hünäri</label>
                                                    <select class="custom-select" id="Hunar" name="Hunar">
                                                        <option value="">-----------</option>
                                                        <option
                                                            value="Dänäni saklamagyň we gaýtadan işlemegiň tehnlogiýasy"
                                                            <?= old('Hunar', $candidate['Hunar']) == 'Dänäni saklamagyň we gaýtadan işlemegiň tehnlogiýasy' ? 'selected' : '' ?>
                                                        >
                                                            Dänäni saklamagyň we gaýtadan işlemegiň tehnlogiýasy
                                                        </option>
                                                        <option value="Ykdysadyýet we meýilnamalaşdyryş"
                                                            <?= old('Hunar', $candidate['Hunar']) == 'Ykdysadyýet we meýilnamalaşdyryş' ? 'selected' : '' ?>
                                                        >
                                                            Ykdysadyýet we meýilnamalaşdyryş
                                                        </option>
                                                        <option value="Çörek, süýji we unaş önümleriniň tehnlogiýasy"
                                                            <?= old('Hunar', $candidate['Hunar']) == 'Çörek, süýji we unaş önümleriniň tehnlogiýasy' ? 'selected' : '' ?>
                                                        >
                                                            Çörek, süýji we unaş önümleriniň tehnlogiýasy
                                                        </option>
                                                        <option
                                                            value="Oba hojalyk önümleriniň tehnlogiýasy we gaýtadan işlenilmegi"
                                                            <?= old('Hunar', $candidate['Hunar']) == 'Oba hojalyk önümleriniň tehnlogiýasy we gaýtadan işlenilmegi' ? 'selected' : '' ?>
                                                        >
                                                            Oba hojalyk önümleriniň tehnlogiýasy we gaýtadan işlenilmegi
                                                        </option>
                                                        <option value="Turşatma önümçiliginiň we çakyryň tehnlogiýasy"
                                                            <?= old('Hunar', $candidate['Hunar']) == 'Turşatma önümçiliginiň we çakyryň tehnlogiýasy' ? 'selected' : '' ?>
                                                        >
                                                            Turşatma önümçiliginiň we çakyryň tehnlogiýasy
                                                        </option>
                                                        <option value="Buhgalterçilik hasaba alnyşy"
                                                            <?= old('Hunar', $candidate['Hunar']) == 'Buhgalterçilik hasaba alnyşy' ? 'selected' : '' ?>
                                                        >
                                                            Buhgalterçilik hasaba alnyşy
                                                        </option>
                                                        <option
                                                            value="Pagtany ilkinji işläp taýýarlamagyň tehnlogiýasy"
                                                            <?= old('Hunar', $candidate['Hunar']) == 'Pagtany ilkinji işläp taýýarlamagyň tehnlogiýasy' ? 'selected' : '' ?>
                                                        >
                                                            Pagtany ilkinji işläp taýýarlamagyň tehnlogiýasy
                                                        </option>
                                                        <option value="Ösümlikleri goramak"
                                                            <?= old('Hunar', $candidate['Hunar']) == 'Ösümlikleri goramak' ? 'selected' : '' ?>
                                                        >Ösümlikleri goramak</option>
                                                        <option value="Weterinariýa" <?= old('Hunar', $candidate['Hunar']) == 'Weterinariýa' ? 'selected' : '' ?>>Weterinariýa</option>
                                                        <option value="Ýer ulanylyşy" <?= old('Hunar', $candidate['Hunar']) == 'Ýer ulanylyşy' ? 'selected' : '' ?>>Ýer ulanylyşy</option>
                                                        <option value="Tokaý we seýilgäh hojalygy"
                                                            <?= old('Hunar', $candidate['Hunar']) == 'Tokaý we seýilgäh hojalygy' ? 'selected' : '' ?>
                                                        >
                                                            Tokaý we seýilgäh hojalygy
                                                        </option>
                                                        <option value="Oba hojalygynyň mehanizasiýasy"
                                                            <?= old('Hunar', $candidate['Hunar']) == 'Oba hojalygynyň mehanizasiýasy' ? 'selected' : '' ?>
                                                        >
                                                            Oba hojalygynyň mehanizasiýasy
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-4">
                                                <div class="form-group">
                                                    <label for="Oglan_gyz">Jynsy</label>
                                                    <select class="custom-select" id="Oglan_gyz" name="Oglan_gyz">
                                                        <option value="">--------</option>
                                                        <option value="Oglan" <?= old('Oglan_gyz', $candidate['Oglan_gyz']) == 'Oglan' ? 'selected' : '' ?>>Oglan</option>
                                                        <option value="Gyz" <?= old('Oglan_gyz', $candidate['Oglan_gyz']) == 'Gyz' ? 'selected' : '' ?>>Gyz</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-4">
                                                <div class="form-group">
                                                    <label for="gelin">Gelin</label>
                                                    <select class="custom-select" id="gelin" name="gelin">
                                                        <option value="">-----------</option>
                                                        <option value="Hawa" <?= old('gelin', $candidate['gelin']) == 'Hawa' ? 'selected' : '' ?>>Hawa</option>
                                                        <option value="Ýok" <?= old('gelin', $candidate['gelin']) == 'Ýok' ? 'selected' : '' ?>>Ýok</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-4">
                                                <div class="form-group">
                                                    <label for="Welayat">Welaýat</label>
                                                    <select class="custom-select" id="Welayat" name="Welayat">
                                                        <option value="">-----------</option>
                                                        <option value="Aşgabat" <?= old('Welayat', $candidate['Welayat']) == 'Aşgabat' ? 'selected' : '' ?>>Aşgabat</option>
                                                        <option value="Ahal" <?= old('Welayat', $candidate['Welayat']) == 'Ahal' ? 'selected' : '' ?>>Ahal</option>
                                                        <option value="Balkan" <?= old('Welayat', $candidate['Welayat']) == 'Balkan' ? 'selected' : '' ?>>Balkan</option>
                                                        <option value="Daşoguz" <?= old('Welayat', $candidate['Welayat']) == 'Daşoguz' ? 'selected' : '' ?>>Daşoguz</option>
                                                        <option value="Lebap" <?= old('Welayat', $candidate['Welayat']) == 'Lebap' ? 'selected' : '' ?>>Lebap</option>
                                                        <option value="Mary" <?= old('Welayat', $candidate['Welayat']) == 'Mary' ? 'selected' : '' ?>>Mary</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-4">
                                                <div class="form-group">
                                                    <label for="Etrap">Etrap</label>
                                                    <select class="custom-select" id="Etrap" name="Etrap">
                                                        <option value="">-----------</option>
                                                        <option value="Köpetdag etr." <?= old('Etrap', $candidate['etrap']) == 'Köpetdag etr.' ? 'selected' : '' ?>>Köpetdag etr.</option>
                                                        <option value="Bagtyýarlyk etr." <?= old('Etrap', $candidate['etrap']) == 'Bagtyýarlyk etr.' ? 'selected' : '' ?>>
                                                            Bagtyýarlyk etr.
                                                        </option>
                                                        <option value="Berkararlyk etr." <?= old('Etrap', $candidate['etrap']) == 'Berkararlyk etr.' ? 'selected' : '' ?>>
                                                            Berkararlyk etr.
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-4">
                                                <div class="form-group">
                                                    <label for="tabsyran_senesi">Tabşyran senesi</label>
                                                    <input id="tabsyran_senesi" name="tabsyran_senesi" type="text"
                                                           class="form-control" placeholder="Tabşyran senesi" value="<?= old('tabsyran_senesi', $candidate['tabsyran_senesi']) ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-4">
                                                <div class="form-group">
                                                    <label for="FAA">FAA</label>
                                                    <input id="FAA" name="FAA" type="text" class="form-control"
                                                           placeholder="FAA" value="<?= old('FAA', $candidate['FAA']) ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-4">
                                                <div class="form-group">
                                                    <label for="Doglan_senesi">Doglan senesi</label>
                                                    <input id="Doglan_senesi" name="Doglan_senesi" type="text"
                                                           class="form-control" placeholder="Doglan senesi" value="<?= old('Doglan_senesi', $candidate['doglan_senesi']) ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <button type="submit"
                                                    class="btn btn-primary d-flex align-items-center justify-content-center"
                                                    id="submit-button">
                                                <span id="loading" class="spinner-border spinner-border-sm d-none mr-2"
                                                      role="status" aria-hidden="true"></span> Üýtgetmek
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