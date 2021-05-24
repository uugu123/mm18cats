<div class="card shadow-sm">
    <h5 class="card-header">
        {{$cat->name}}
    </h5>
{{--    <img class="card-img-top" width="100%" height="200" src="{{$cat->images[0]->path ?? 'https://upload.wikimedia.org/wikipedia/commons/b/b1/Missing-image-232x150.png'}}"/>--}}
    @if($cat->images->count())
        <img class="card-img-top" width="100%" height="200" src="{{$cat->images[0]->path}}"/>
    @endempty
    <ul class="list-group list-group-flush">
        <li class="list-group-item"><b>{{__('Breed')}}:</b> {{$cat->breed}}</li>
        <li class="list-group-item"><b>{{__('Age')}}:</b> {{ $cat->age }}</li>
        <li class="list-group-item"><b>{{__('Gender')}}:</b> {{ __(ucfirst(strtolower($cat->gender))) }}</li>
    </ul>
    <div class="card-body">
        <p class="card-text">{{$cat->description}}</p>
        <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary">{{__('album-card.View')}}</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">{{__('album-card.Edit')}}</button>
            </div>
            <small class="text-muted">{{$cat->created_at->diffForHumans()}}</small>
        </div>
    </div>
</div>
