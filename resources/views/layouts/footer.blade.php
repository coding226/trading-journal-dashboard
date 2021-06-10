            <!-- footer start-->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 footer-copyright text-center">
                            <p class="mb-0">Copyright 2021 © Trading Journal Dashboard </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">Vertically centered</button> -->
    <div class="modal fade" id="alertmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form action="" method="post">
                @csrf
                    <div class="modal-header">
                        <h5 class="modal-title">Modal title</h5>
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p></p>
                        <input type="hidden">
                    </div>
                    <div class="modal-footer">
                        <a class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</a>
                        <button type="submit" class="btn btn-primary" type="button">Ok</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- latest jquery-->
    <script src="{{ url('assets/js/jquery-3.5.1.min.js') }}"></script>
    <!-- Bootstrap js-->
    <script src="{{ url('assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <!-- feather icon js-->
    <script src="{{ url('assets/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ url('assets/js/icons/feather-icon/feather-icon.js') }}"></script>
    <!-- scrollbar js-->
    <script src="{{ url('assets/js/scrollbar/simplebar.js') }}"></script>
    <script src="{{ url('assets/js/scrollbar/custom.js') }}"></script>
    <!-- Sidebar jquery-->
    <script src="{{ url('assets/js/config.js') }}"></script>
    <!-- Plugins JS start-->
    <script src="{{ url('assets/js/sidebar-menu.js') }}"></script>
    @yield('script')
    <script src="../assets/js/tooltip-init.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{ url('assets/js/script.js') }}"></script>
    <script>
        if(localStorage.getItem("primary") != null) {
            document.documentElement.style.setProperty('--theme-deafult', localStorage.getItem("primary"));
        }
        if(localStorage.getItem("secondary") != null) {
            document.documentElement.style.setProperty('--theme-secondary', localStorage.getItem("secondary"));
        }
    </script>
    <!-- login js-->
    <!-- Plugin used-->
    <!-- GTranslate: https://gtranslate.io/ -->
</body>

</html>
