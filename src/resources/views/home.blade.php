@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        {{-- 日付の取得・表示 --}}
        {{ \Carbon\Carbon::now()->formatLocalized('%Y年%m月%d日(%a)') }} 
        {{ $user->name }}
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">勤怠</div>

                <div class="card-body">
                    <button disabled="disabled">出勤</button>
                    <button disabled="disabled">退勤</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
