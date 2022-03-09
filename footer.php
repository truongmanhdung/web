        </div>
        </div>
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Trường Đại học Tài nguyên và môi trường Hà Nội</span>
                </div>
            </div>
        </footer>
        </div>
        </div>
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.4/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.min.js"></script>
        <script src="startbootstrap-sb-admin-2-master/vendor/jquery/jquery.min.js"></script>
        <script src="startbootstrap-sb-admin-2-master/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="startbootstrap-sb-admin-2-master/vendor/jquery-easing/jquery.easing.min.js"></script>
        <script src="startbootstrap-sb-admin-2-master/js/sb-admin-2.min.js"></script>
        <script src="startbootstrap-sb-admin-2-master/vendor/chart.js/Chart.min.js"></script>
        <script src="startbootstrap-sb-admin-2-master/js/demo/chart-area-demo.js"></script>
        <script src="startbootstrap-sb-admin-2-master/js/demo/chart-pie-demo.js"></script>
        <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
        <script type="text/javascript">
            bkLib.onDomLoaded(nicEditors.allTextAreas);
        </script>
        <script>
            var seen = {};
            $('#cateid option').each(function() {
                var txt = $(this).text();
                if (seen[txt])
                    $(this).remove();
                else
                    seen[txt] = true;
            });
            imgInp.onchange = evt => {
                const [file] = imgInp.files
                if (file) {
                    blah.src = URL.createObjectURL(file)
                }
            }
        </script>

        </body>

        </html>
