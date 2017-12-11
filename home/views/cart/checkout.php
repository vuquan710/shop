<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="views/assetscss/style.css">
</head>
<body>
    <form method="post">
        
        <div class="sidebar ">
            <div class="sidebar_header">
                <h2>
                    <label class="control-label">Đơn hàng</label>
                    <label class="control-label">(1 sản phẩm)</label>
                </h2>
                
            </div>
            <div class="sidebar__content">
                <div class="order-summary order-summary-product-list order-summary-is-collapsed">
                    <div class="summary-body summary-section summary-product">
                        <div class="summary-product-list">
                            <table class="product-table">
                                <tbody>
                                    <tr class="product product-has-image clearfix">
                                        <td>
                                            <div class="product-thumbnail">
                                                <div class="product-thumbnail__wrapper">
                                                    <img src="images/bn22.jpg" class="product-thumbnail__image">
                                                </div>
                                                <span class="product-thumbnail__quantity" aria-hidden="true">1</span>
                                            </div>
                                        </td>
                                        <td class="product-info">
                                            <span class="product-info-name">
                                                Găng Tay Xe Máy Bít Ngón BN22
                                            </span>
                                            <span class="product-info-description">
                                                L
                                            </span>
                                        </td>
                                        <td class="product-price text-right">
                                            230.000₫
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="order-summary order-summary-discount">
                    <div class="summary-section">
                        <div class="form-group m0" bind-show="!existCode ||code == null || !code.length">
                            <div class="field__input-btn-wrapper">
                                <div class="field__input-wrapper">
                                    <input bind="code" name="code" type="text" class="form-control discount_code" placeholder="Nhập mã giảm giá" value="" id="checkout_reduction_code">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="order-summary order-summary-total-lines">
                    <div class="summary-section border-top-none--mobile">
                        <div class="total-line total-line-subtotal clearfix">
                            <span class="total-line-name pull-left">
                                Tạm tính
                            </span>
                            <span  class="total-line-subprice pull-right">230.000₫</span>
                        </div>
                        <div class="total-line total-line-shipping clearfix" bind-show="requiresShipping">
                            <span class="total-line-name pull-left">
                                Phí vận chuyển
                            </span>
                        </div>
                        <div class="total-line total-line-total clearfix">
                            <span class="total-line-name pull-left">
                                Tổng cộng
                            </span>
                            <span bind="" class="total-line-price pull-right">230.000₫</span>
                        </div>
                    </div>
                </div>
                <div class="form-group clearfix hidden-sm hidden-xs">
                    <div class="field__input-btn-wrapper mt10">
                        <a class="previous-link" href="./index.php?controller=cart">
                            <i class="fa fa-angle-left fa-lg" aria-hidden="true"></i>
                            <span class="back-to-card">< Quay về giỏ hàng</span>
                        </a>
                        <input class="btn btn-primary btn-checkout-sidebar"  type="button"  value="ĐẶT HÀNG">
                    </div>
                </div>
                <div class="form-group has-error">
                    <div class="help-block ">
                        <ul class="list-unstyled">   
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- end sidebar -->
</form>
</body>
</html>