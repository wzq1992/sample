<form action="{{ route('statuses.store') }}" method="post">
  @include('shared.errors')

  {{ csrf_field() }}

  <textarea class="form-control" row="3" placehodler="聊聊新鲜事..." name="content">
    {{ old('content') }}
  </textarea>

  <button type="submit" class="btn btn-primary pull-right">发布</button>
</form>
