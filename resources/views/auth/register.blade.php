@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form id="forms" class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="phone" class="col-md-4 control-label">Phone</label>

                            <div class="col-md-6">

                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <select name="country_code" style="width: 150px;">
                                            <option value="+1">(+1) US</option>
                                            <option value="+212">(+212) Morocco</option>
                                            <option value="+81">(+81) JP</option>
                                        </select>
                                    </div>
                                    <input  placeholder="注) 080 -> 80" id="phone" type="text" class="form-control" name="phone" required>

                                    @if ($errors->has('country_code'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('country_code') }}</strong>
                                    </span>
                                    @endif
                                    @if ($errors->has('phone'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" id="btn">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// すべてのDOMツリー構造及び関連リソースが読み込まれたあとにJavaScriptが実行されるようになる window.onload
window.onload = function() {
 console.log("オラオラオラオラオラ");
 
 // registerの情報を取得して、クリックされた時に処理がされるようにする
 var btn = document.getElementById('phone');
 console.log(btn);
 
 // 参考記事：（https://ginpen.com/2018/01/30/realtime-form-values/
 btn.addEventListener('input',function(){
     
     // document.forms.までは定型,formsはformタグのid,nameは取得したいinputタグのidを指定
     var word = document.forms.forms.phone.value;
     console.log(word);
     var split = word.split("");
     
     // 0が頭に入力されていた場合、0を取り除き、それ以下の値だけ使用する
     if(split[0]==="0"){
         var shifted = split.shift();
         var result = split.join('');
         console.log(result);
         console.log("0が入力されているよ");
         
         document.getElementById('phone').value = result;
         
     }else{
         console.log("0じゃないよ");
     }
 });
};


</script>
@endsection
