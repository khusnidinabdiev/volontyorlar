@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div>
                  <a href="/home" class="btn btn-outline-success float-right">Orqaga</a>
</div>
                <div class="card-body">
                    <form action="" method="post">
                    @csrf
                      
                      <div class="form-group">
                        <label for="exampleInput">F.I.O</label>
                        <input type="text" class="form-control" id="exampleInputreg" aria-describedby="regHelp">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputreg">Yashash joyingiz</label>
                        <input type="text" class="form-control" id="exampleInputreg" aria-describedby="regHelp">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputreg">Oqish yoki ish joyingiz</label>
                        <input type="text" class="form-control" id="exampleInputreg" aria-describedby="regHelp">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputreg">Telefon raqamingiz</label>
                        <input type="text" class="form-control" id="exampleInputreg" aria-describedby="regHelp">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputreg">Telegram raqamingiz</label>
                        <input type="text" class="form-control" name="telegram" id="exampleInputreg" aria-describedby="regHelp">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">1-savol: Valantyorlik haqida qayerda eshitgansiz?(3-4 gapdan oshmasin)</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">2-savol: Nima uchun valantyor bolmoqchisiz</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">3-savol: 1 oyda qancha vaqtingizni Volontyorlikka sarflamoqchisiz</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
                     
                      
                      <button type="submit" class="btn btn-outline-success">Send</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
