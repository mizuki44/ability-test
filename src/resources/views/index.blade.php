@extends('layouts.index_app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')

<div class="contact-form__content">
  <div class="contact-form__heading">
    <h2>Contact</h2>
  </div>
  <form class="form" action="contacts/confirm" method="post">
    @csrf
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">お名前</span>
        <span class="form__label--required">必須</span>
      </div>
      <div class="form__group-content">
        <dd>
            <ul>
              <li>
                <div class="form__input--text">
                  <input type="text" name="first_name" placeholder="例:テスト" value="{{ old('first_name') }}" />
                </div>
              </li>
              <li>
                <div class="form__input--text">
                  <input type="text" name="last_name" placeholder="例:太郎" value="{{ old('last_name') }}" />
                </div>
              </li>
            </ul>
        </dd>
        <div class="form__error">
          @error('first_name')
          {{ $message }}
          @enderror
        </div>
        <div class="form__error">
          @error('last_name')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
<div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">性別</span>
        <span class="form__label--required">必須</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--radio">
              <input id="men" type="radio" name="gender" value="1" checked>
              <label for="men" name="gender" value="男性">男性</label>
              <input id="women" type="radio" name="gender" value="2">
              <label for="women" name="gender" value="女性">女性</label>
              <input id="others" type="radio" name="gender" value="3" >
              <label for="others" name="gender" value="その他">その他</label>
          </div>


        <!-- <div class="form__input--text">
          <input type="gender" name="gender" placeholder="" value="{{ old('gender') }}" />
        </div> -->
        <div class="form__error">
          @error('gender')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <div class="form__label--item">メールアドレス</div>
        <span class="form__label--required">必須</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="email" name="email" placeholder="test@example.com" value="{{ old('email') }}" />
        </div>
        <div class="form__error">
          @error('email')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">電話番号</span>
        <span class="form__label--required">必須</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="tel" name="tel" placeholder="090" value="{{ old('tel') }}" />
        </div>
        <div class="form__input--text">
          <input type="tel" name="tel" placeholder="1234" value="{{ old('tel') }}" />
        </div>
        <div class="form__input--text">
          <input type="tel" name="tel" placeholder="5678" value="{{ old('tel') }}" />
        </div>
        <div class="form__error">
          @error('tel')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
<div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">住所</span>
        <span class="form__label--required">必須</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="address" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}" />
        </div>
        <div class="form__error">
          @error('address')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">建物名</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="building" name="building" placeholder="例:千駄ヶ谷マンション101" value="{{ old('building') }}" />
        </div>
      </div>
    </div>
<div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">お問い合わせ種類</span>
        <span class="form__label--required">必須</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <select class="create-form__item-select" name="category_id">
              <option value="" selected="selected" >選択してください</option>
             @foreach ($categories as $category)
                 <option value="{{ $category['id'] }}">{{ $category['content'] }}</option>
             @endforeach
          </select>
        </div>
        <div class="form__error">
          @error('category_id')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>

    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">お問い合わせ内容</span>
        <span class="form__label--required">必須</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--textarea">
          <textarea name="detail" placeholder="お問い合わせ内容をご記載ください">{{ old('detail') }}</textarea>
          <div class="form__error">
          @error('detail')
          {{ $message }}
          @enderror
        </div>
        </div>
      </div>
    </div>
    <div class="form__button">
      <button class="form__button-submit" type="submit">確認画面</button>
    </div>
  </form>
</div>
@endsection