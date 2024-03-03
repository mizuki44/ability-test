@extends('layouts.app') @section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection @section('content')
<div class="todo__alert">
@if (session('message'))
<div class="todo__alert--success">{{ session('message') }}</div>
@endif @if ($errors->any())
<div class="todo__alert--danger">
    <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
    </ul>
</div>
@endif
</div>
<div class="todo__content">
<div class="section__title">
<h2>Admin</h2>
</div>
<form class="search-form" action="/admin/search" method="get">
<div class="search-form__item">
    <input class="search-form__item-input" type="text" placeholder="名前やメールアドレスを入力してください"/>
</div>
<div class="search-form__item">
    <select class="search-form__item-select" name="gender">
              <option value="" selected="selected" >性別</option>
                 <option value="1">男性</option>
                 <option value="2">女性</option>
                 <option value="3">その他</option>
    <!-- <input class="search-form__item-input" type="text" />
    <select class="search-form__item-select">
    <option value="">性別</option> -->
    </select>
</div>
<div class="search-form__item">
     <select class="create-form__item-select" name="category_id">
              <option value="" selected="selected" >お問い合わせの種類</option>
             @foreach ($categories as $category)
                 <option value="{{ $category['id'] }}">{{ $category['content'] }}</option>
             @endforeach
          </select>
</div>
<div class="search-form__item">
    <input class="search-form__item-input" type="date" />
</div>

<div class="search-form__button">
    <button class="search-form__button-submit" type="submit">検索</button>
</div>
<div class="search-form__button">
    <button class="search-form__button-submit">
        <a href="{{ url('admin') }}">削除</a>
    </button>
</div>
</form>
<div class="todo-table">
    <table class="todo-table__inner">
    <tr class="todo-table__row">
    <th class="todo-table__header">
        <div class="text_box">
        <span class="todo-table__header-span">名前</span>
        <span class="todo-table__header-span">性別</span> 
        <span class="todo-table__header-span">メールアドレス</span>
        <span class="todo-table__header-span">お問い合わせの種類</span>
        </div>
    </th>
    </tr>
    @foreach ($contacts as $contact)
    <tr class="todo-table__row">
        <td class="todo-table__item">
        <form class="update-form" action="/" method="post">
            @method('PATCH') @csrf
            <div class="update-form__item">
            <input
                class="update-form__item-input"
                type="text"
                name="name"
                value="{{ $contact['name'] }}"
            />
            <input type="hidden" name="id" value="{{ $contact['name'] }}" />
            </div>

<div class="update-form__item">
            @if ($contact['gender'] == 1)
                <p>男性</p>
            @elseif ($contact['gender'] == 2)
              <p>女性</p>
            @else
              <p>その他</p>
            @endif
            <input type="hidden" name="gender" value="{{ $contact['gender'] }}" />
            </div>

<div class="update-form__item">
            <input
                class="update-form__item-input"
                type="text"
                name="email"
                value="{{ $contact['email'] }}"
            />
            <input type="hidden" name="email" value="{{ $contact['email'] }}" />
            </div>

            <div class="update-form__item">
            <input
                class="update-form__item-input"
                type="text"
                name="detail"
                value="{{ $contact['detail'] }}"
            />
            <input type="hidden" name="detail" value="{{ $contact['detail'] }}" />
            </div>

        <div class="update-form__item">
            <p class="update-form__itme-p">{{ $contact['category']['content'] }}</p>
        </div>
        </form>
        </td>
        <td class="todo-table__item">
        <form class="delete-form" action="/modal" method="get">
            <div class="delete-form__button">
            <button class="delete-form__button-submit" type="submit">
                詳細
            </button>
            </div>
        </form>
        </td>
    </tr>
    @endforeach
    </table>
</div>
</div>
{{ $contacts->links() }}
@endsection