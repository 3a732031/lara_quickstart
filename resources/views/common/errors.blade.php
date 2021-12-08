<!--// resources/views/common/errors.blade.php
//驗證錯誤
//->withErrors($validator) 的呼叫會透過給定的驗證器實例將錯誤訊息快閃至 session 中，所以我們可以在視圖中透過 $errors 變數存取它們。 -->
@if (count($errors) > 0)
    <!-- 表單錯誤清單 -->
    <div class="alert alert-danger">
        <strong>哎呀！出了些問題！</strong>

        <br><br>

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
