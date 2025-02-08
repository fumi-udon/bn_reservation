<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Bistro Nippon')); ?> - <?php echo $__env->yieldContent('title', 'in tunisia'); ?></title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@400;500&display=swap" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Custom CSS
    <link href="<?php echo e(asset('css/reservation.css')); ?>" rel="stylesheet">
-->
    <style>
        /* Main content background styling */
        /* 背景画像のオーバーレイを含む修正版 */
        .main-content {
            position: relative;
            background: none;
            /* 直接の背景設定を削除 */
            padding: 40px 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            min-height: 100vh;
            color: #fff;
            flex: 1;
        }

        /* 背景画像用の疑似要素 */
        .main-content::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('<?php echo e(asset('images/reservation-bg.jpg')); ?>');
            /* Laravel assetヘルパーを使用 */
            background-size: cover;
            background-position: center;
            opacity: 0.6;
            z-index: -2;
        }

        /* 暗いオーバーレイ層 */
        .main-content::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            /* 黒の透過オーバーレイ */
            z-index: -1;
        }

        /* コンテンツコンテナの背景も調整 */
        .content-container {
            max-width: 800px;
            background: rgba(0, 0, 0, 0.4);
            /* より透明に */
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
            position: relative;
            /* z-indexを機能させるため */
            z-index: 1;
        }

        /* Headline and paragraph styling */
        .content-container h1 {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .content-container p {
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 30px;
        }

        /* Button styling */
        .btn-main {
            display: inline-block;
            padding: 10px 20px;
            font-size: 1rem;
            font-weight: bold;
            color: #fff;
            background-color: #f5a623;
            border: none;
            border-radius: 4px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .btn-main:hover {
            background-color: #e08e12;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php if(app()->environment('local')): ?>
    <div>
        <h3>ローカル環境</h3>
    </div>
    <?php endif; ?>
    <!-- Main Content ★ debug-->
    <section class="main-content">
        <?php if($status > 0): ?>
            <div class="content-container">
                <div class="alert alert-warning text-center">
                    <h3 class="alert-heading">Notice</h3>
                    <p class="mb-0"><?php echo e($message); ?></p>

                    <!-- 追加の連絡先情報 -->
                    <div class="mt-4">
                        <p>For inquiries, please contact us:</p>
                        <p><a href="/contact"><i class="bi bi-whatsapp"></i> WhatsApp available</a></p>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <div class="content-container">

                <h1>Reservation</h1>
                <p>
                    <!-- Reservation Form -->
                <div class="card shadow">
                    <div class="card-body">
                        <?php if($errors->any()): ?>
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>

                        <form method="POST" action="<?php echo e(route('reservation.confirm')); ?>" class="needs-validation"
                            novalidate>
                            <?php echo csrf_field(); ?>
                            <!-- Name -->
                            <div class="mb-4">
                                <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    id="name" name="name" value="<?php echo e(old('name')); ?>" required>
                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <!-- Email -->
                            <div class="mb-4">
                                <label for="email" class="form-label">Email <span
                                        class="text-danger">*</span></label>
                                <input type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    id="email" name="email" value="<?php echo e(old('email')); ?>" required>
                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                <small class="text-muted">We will send a confirmation email</small>
                            </div>

                            <!-- Phone -->
                            <div class="mb-4">
                                <label for="phone" class="form-label">Phone Number <span
                                        class="text-danger">*</span></label>
                                <input type="tel" class="form-control <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    id="phone" name="phone" value="<?php echo e(old('phone')); ?>" required
                                    pattern="[0-9]{8,12}">
                                <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                <small class="text-muted">Example: 24 986 077 (no hyphens)</small>
                            </div>

                            <!-- Date -->
                            <div class="mb-4">
                                <label for="date" class="form-label">Reservation Date <span
                                        class="text-danger">*</span></label>
                                <input type="date" class="form-control <?php $__errorArgs = ['date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    id="date" name="date" value="<?php echo e(old('date')); ?>" required>
                                <?php $__errorArgs = ['date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <!-- Time -->
                            <div class="mb-4">
                                <label for="time" class="form-label">Reservation Time <span
                                        class="text-danger">*</span></label>
                                <select class="form-select <?php $__errorArgs = ['time'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="time"
                                    name="time" required>
                                    <option value="">Please select</option>
                                    <?php $__currentLoopData = config('reservation_bn.available_times'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $time): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($time); ?>"
                                            <?php echo e(old('time') == $time ? 'selected' : ''); ?>>
                                            <?php echo e(\Carbon\Carbon::createFromFormat('H:i', $time)->format('H:i')); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <?php $__errorArgs = ['time'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                <small
                                    class="text-muted"><?php echo e(config('reservation_bn.restaurant_info.open_hours')); ?></small>
                            </div>

                            <!-- Number of Guests -->
                            <div class="mb-4">
                                <label for="guests" class="form-label">Number of Guests <span
                                        class="text-danger">*</span></label>
                                <select class="form-select <?php $__errorArgs = ['guests'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="guests"
                                    name="guests" required>
                                    <option value="">Please select</option>
                                    <?php for($i = config('reservation_bn.min_guests'); $i <= config('reservation_bn.max_guests'); $i++): ?>
                                        <option value="<?php echo e($i); ?>"
                                            <?php echo e(old('guests') == $i ? 'selected' : ''); ?>>
                                            <?php echo e($i); ?> guests
                                        </option>
                                    <?php endfor; ?>
                                </select>
                                <?php $__errorArgs = ['guests'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                <small class="text-muted">For parties larger than
                                    <?php echo e(config('reservation_bn.max_guests')); ?>, please call us directly</small>
                            </div>

                            <!-- Submit Button -->
                            <div class="text-center">
                                <button type="submit" class="btn-main px-5">Proceed to Confirmation</button>
                            </div>
                        </form>
                    </div>
                </div>

                </p>
            </div>
        <?php endif; ?>
    </section>
    <!-- Main Content ★ debug END-->
    <!-- Footer -->
    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php $__env->startPush('scripts'); ?>
        <script>
            $(document).ready(function() {
                const $dateInput = $('#date');

                // Bootstrap alertを使用したエラー表示関数
                function showError(message) {
                    // 既存のアラートを削除
                    $('.alert-sunday').remove();

                    // Bootstrapアラートを作成
                    const $alert = $('<div>', {
                        class: 'alert alert-danger alert-dismissible fade show alert-sunday mt-2',
                        role: 'alert'
                    }).append(
                        message,
                        $('<button>', {
                            type: 'button',
                            class: 'btn-close',
                            'data-bs-dismiss': 'alert',
                            'aria-label': 'Close'
                        })
                    );

                    // 日付入力フィールドの後にアラートを挿入
                    $dateInput.after($alert);
                }

                $dateInput.on('change', function() {
                    const selectedDate = new Date($(this).val());

                    if (selectedDate.getDay() === 0) {
                        showError('Sorry, we are closed on Sundays.<br>日曜日は定休日です。');
                        $(this).val(''); // 日付をクリア

                        // オプション：日付入力フィールドにフォーカスを戻す
                        $(this).focus();
                    } else {
                        // エラーメッセージが表示されている場合は削除
                        $('.alert-sunday').remove();
                    }
                });

                // オプション：日付選択の制限を追加
                const today = new Date();
                const maxDate = new Date();
                maxDate.setDate(today.getDate() + <?php echo e(config('reservation_bn.booking_end_days')); ?>);

                $dateInput.attr({
                    'min': today.toISOString().split('T')[0],
                    'max': maxDate.toISOString().split('T')[0]
                });
            });
        </script>
    <?php $__env->stopPush(); ?>
    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\bn_r\resources\views/reservations/form.blade.php ENDPATH**/ ?>