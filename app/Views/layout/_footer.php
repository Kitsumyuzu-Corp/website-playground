                        <footer class="footer">
                            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">© 2023 <a href="https://www.instagram.com/kitsuzu.store" target="_blank">Kitsuzu Store</a> All Rights Reserved.</span>
                            </div>
                        </footer> 
                        <!-- partial -->
                    </div>

                </div>

            </div>

        <!-- plugins:js -->
            <script src="<?= base_url('assets/kitsu_template') ?>/vendors/js/vendor.bundle.base.js"></script>
        <!-- endinject -->

        <!-- inject:js -->
            <script src="<?= base_url('assets/kitsu_template') ?>/js/off-canvas.js"></script>
            <script src="<?= base_url('assets/kitsu_template') ?>/js/hoverable-collapse.js"></script>
            <script src="<?= base_url('assets/kitsu_template') ?>/js/template.js"></script>
            <script src="<?= base_url('assets/kitsu_template') ?>/js/settings.js"></script>
            <script src="<?= base_url('assets/kitsu_template') ?>/js/todolist.js"></script>
        <!-- endinject -->
            <script src="https://kit.fontawesome.com/cbb81e50b1.js" crossorigin="anonymous"></script>
            <script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>
            <script src="https://cdn.datatables.net/1.11.6/js/jquery.dataTables.min.js"></script>

    </body>

    <style>
        *::-webkit-file-upload-button {
            display: none;
        }
        ::-webkit-scrollbar {
            width: 8px;
            border-radius: 10px;
        }
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 20px;
        }
        ::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 20px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
            border-radius: 20px;
        }

        /* Custom CSS to align DataTables content to center */
        #table_bermain_wrapper, #table_bermain thead th, #table_bermain tbody td {
            text-align: center;
        }
        #table_selesai_wrapper, #table_selesai thead th, #table_selesai tbody td {
            text-align: center;
        }
    </style>

    <script>
        $(document).ready(function() {
            $('#table_bermain').DataTable({
                "paging": false,
                "searching": true,
                "ordering": false,
                "info": false,
                "autoWidth": false,
                "responsive": true,
            });
            $('#table_selesai').DataTable({
                "paging": false,
                "searching": true,
                "ordering": false,
                "info": false,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>

</html>