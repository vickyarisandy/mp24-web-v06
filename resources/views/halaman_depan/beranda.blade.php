@extends('layouts.hlmdpn')
@section('konten_depan')
    <div class="container">
        <div class="row">
            <h4>Pesan </h4>
           
              
                @if(auth()->user())
                    @forelse($datas['notifications'] as $notification)
                        <div class="alert alert-info" role="alert">
                            [{{ $notification->created_at }}] User {{ $notification->data['user_name'] }} ({{ $notification->data['user_email'] }}) has just registered.
                            <a href="#" class="float-right mark-as-read" data-id="{{ $notification->id }}">
                                Mark as read
                            </a>
                        </div>

                        @if($loop->last)
                            <a href="#" id="mark-all">
                                Mark all as read
                            </a>
                        @endif
                    @empty
                        There are no new notifications
                    @endforelse
                @endif
        </div>
    </div>
@endsection

@push('panggil_js')
    
@endpush