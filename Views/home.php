
<div class="container-fluid pt-5 pb-1">
    <div class="row py-2">
        <div class="col-lg-11 mx-auto">
            <div class="card rounded shadow border-0">
                <div class="card-body pt-5 bg-white rounded">
                    <div class="table-responsive">
                        <table id="example" style="width:100%" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Sector</th>
                                <th>Website</th>
                                <th>Employees</th>
                                <th>Address</th>
                                <th>Legal Form</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                                foreach ($companies as $company) {
                                    echo <<<EOL
                                <tr>
                                    <td>{$company['id']}</td>
                                    <td>{$company['name']}</td>
                                    <td>{$company['sector']}</td>
                                    <td>{$company['website']}</td>
                                    <td>{$company['employee_number']}</td>
                                    <td>{$company['address']}</td>
                                    <td>{$company['legal_form']}</td>
                                    <td class="d-flex"> 
                                    <a href=""
                                           class="p-2"
                                           title="detail entreprise">
                                            <i class="fas fa-circle-info"></i>
                                        </a>
                                        <a href="" class="p-2" title="mofifier entreprise"><i
                                                class="fa-solid fa-edit text-warning"></i></a>
                                        <a href="" class="p-2"
                                           title="supprimer entreprise">
                                            <i class="fa-solid fa-trash text-danger"></i>
                                        </a>
                                    </td>
                                </tr>
                                EOL;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- DEPENDANCY DATATABLE -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(function () {
        $(document).ready(function () {
            $('#example').DataTable();
        });
    });
</script>
