@extends('layouts.app')
@section("content")
<style>
    
._paySucess-page {
  background-color: #e9eff4;
  min-height: 90vh;
  display: flex;
  align-items: center;
  justify-content: center;
}

._paySucess {
  padding: 30px;
  background-color: #fff;
  border: 1px solid #d0d5d8;
  border-radius: 10px;
  text-align: center;
}
._paySucess ._titleDiv {
  position: relative;
  margin-bottom: 25px;
  padding-bottom: 25px;
}
._paySucess ._titleDiv:before {
  position: absolute;
  content: "";
  height: 1px;
  width: calc(100% - 30px);
  border-bottom: 1px solid #dddddd91;
  left: 0;
  right: 0;
  margin: 0 auto;
  bottom: 0;
}
._paySucess ._title-1 {
  margin-bottom: 5px;
}
@media (min-width: 1200px) {
  ._paySucess {
    padding: 45px;
  }
}
._paySucess ._btn {
  background-color: #22a272;
  border-color: #22a272;
  height: 45px;
  padding: 8px 15px;
  font-size: 15px;
  line-height: 27px;
  min-width: 115px;
  margin-bottom: 5px;
}
@media (min-width: 992px) {
  ._paySucess ._btn {
    min-width: 160px;
  }
}

._checkIcon {
  margin-bottom: 15px;
  display: inline-block;
  height: 80px;
  width: 80px;
  position: relative;
  border: 5px solid #fff;
  border-radius: 50%;
}
@media (min-width: 1200px) {
  ._checkIcon {
    height: 120px;
    width: 120px;
    margin-bottom: 25px;
  }
}
._checkIcon img {
  max-width: 100%;
  filter: drop-shadow(2px 4px 6px rgba(0, 0, 0, 0.3));
  background-color: #fff;
  border-radius: 100%;
}
</style>
        <main class="_main">  
        <!-- Begin:  Section-->
        <section class="_paySucess-page _commonPadding">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-lg-6 mx-auto">
                        <div class="_paySucess wow zoomIn">
                            <span class="_checkIcon"><img src="images/checked.svg" alt=""></span>
                            <div class="_titleDiv wow _fadeInUp text-center">
                                <h2 class="_title-1 _green-2"><strong>Payment Successful !</strong></h2>
                                <a href="{{ Request::get('receipt_url') }}" target="_blank">
                            Click here to download you payment receipt
                        </a>
                            </div>
                            <div class="_btnDiv text-center">
                                <a href="{{ url('/') }}" class="btn _btn _btn-indigo">Go Back to Home</a>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </section>
        <!-- End  :  Section-->
    </main>

@endsection