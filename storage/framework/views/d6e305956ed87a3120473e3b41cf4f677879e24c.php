<footer class="footer bg-dark text-white pt-5">
    <div class="container">
        <!-- フッターの主要コンテンツ -->
        <div class="row gx-5">
            <!-- レストラン情報 -->
            <div class="col-lg-4 mb-4">
                <h4 class="font-playfair mb-4">Bistro Nippon</h4>
                <p class="mb-1"><i class="bi bi-telephone-fill me-2"></i>+216 24 986 077</p>
                <p class="mb-3"><i
                        class="bi bi-clock-fill me-2"></i><?php echo e(config('reservation_bn.restaurant_info.open_hours')); ?>

                </p>
                <p class="mb-1"><i class="bi bi-calendar-x-fill me-2"></i>Closed on Sunday</p>
            </div>
        </div>

        <!-- 区切り線 -->
        <hr class="my-4 bg-secondary">

        <!-- コピーライト -->
        <div class="row">
            <div class="col-md-12 text-center">
                <p class="small mb-0">&copy; <?php echo e(date('Y')); ?> Le Nippon IT. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<?php /**PATH C:\xampp\htdocs\bn_r\resources\views/layouts/footer.blade.php ENDPATH**/ ?>