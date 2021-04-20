<!-- Modal Users -->
<div class="modal fade" id="edit-index" data-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <form role="form" method="post" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <p class="modal-title ml-auto" id="staticBackdropLabel">Perditso te dhenat</p>
                    <button type="button" class="close f-focus" data-dismiss="modal" aria-label="Close">
                        <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"
                            clip-rule="evenodd">
                            <path
                                d="M12 0c6.623 0 12 5.377 12 12s-5.377 12-12 12-12-5.377-12-12 5.377-12 12-12zm0 1c6.071 0 11 4.929 11 11s-4.929 11-11 11-11-4.929-11-11 4.929-11 11-11zm0 10.293l5.293-5.293.707.707-5.293 5.293 5.293 5.293-.707.707-5.293-5.293-5.293 5.293-.707-.707 5.293-5.293-5.293-5.293.707-.707 5.293 5.293z" />
                        </svg>
                    </button>
                </div>
                <div class="modal-body row">
                    <form action="">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Titulli</label>
                                <input type="text" class="form-control" id="">
                            </div>
                            <div class="form-group">
                                <label>Qyteti</label>
                                <input type="text" class="form-control" id="">
                            </div>
                            <div class="form-group">
                                <label>Nr. Telefoni</label>
                                <input type="text" class="form-control" id="">
                            </div>
                            <label>Kuadrati(m2)</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" aria-label="Recipient's username"
                                    aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon2">m2</span>
                                </div>
                            </div>
                            <label class="mb-3">Mobilimi</label>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="pmobilim">
                                        <label class="custom-control-label" for="pmobilim">Posedon mobilim</label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="npmobilim">
                                        <label class="custom-control-label" for="npmobilim">Nuk posedon mobilim</label>
                                    </div>
                                </div>
                            </div>
                            <label class="mb-3 mt-3">Targeti</label>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="studentet">
                                        <label class="custom-control-label" for="studentet">Studentet</label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="tegjitha">
                                        <label class="custom-control-label" for="tegjitha">Te gjitha</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Kategoria</label>
                                <select class="form-control" id="">
                                    <option>Shtepi</option>
                                    <option>Banese</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Adresa(Rruga,Nr)</label>
                                <input type="text" class="form-control" id="">
                            </div>
                            <div class="form-group">
                                <label>Kategoria</label>
                                <select class="form-control" id="">
                                    <option>Me Qera</option>
                                    <option>Shitje</option>
                                </select>
                            </div>
                            <label>Nr. Katit</label>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="number" min="1" class="form-control" id="" placeholder="1">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="number" min="1" class="form-control" id="" placeholder="10">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label>Qmimi</label>
                                    <div class="form-group">
                                        <input type="number" min="1" class="form-control" id="" placeholder="1">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <label>Nr. Dhomave</label>
                                    <div class="form-group">
                                        <input type="number" min="1" class="form-control" id="" placeholder="10">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group mt-3">
                                <label>Pershkrimi</label>
                                <textarea class="form-control" id="" rows="10"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="mt-3">Ngarko fotografit(max 6 deri ne 1 mb)</label>
                                <input type="file" name="files">
                            </div>
                            <div class="form-group">
                                <label class="mt-1">Ngarko foto te planit te dhomes,baneses</label>
                                <input type="file" name="files">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn button-btn btn-close f-focus" data-dismiss="modal">Mbyll</button>
                    <button type="submit" class="btn button-btn btn-cms f-focus">Perditso Ndryshimet</button>
                </div>
            </div>
    </div>
</div>