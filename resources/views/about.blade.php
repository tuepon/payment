@extends('layouts.app')

@section('content')
<h1>サイトについて</h1>
  <p>こんにちは。制作者の上野智範です。ご覧いただきありがとうございます。</p>
<h2>仕様</h2>
  <ul>
    <li>Google AppEngine + Cloud SQLにて稼働（必要時以外は停止する場合がございます。）</li>
    <li>PHP 7.1/Laravel 5.7/MySQL 5.7/Bootstrap4</li>
  </ul>

<h2>今後の機能追加予定</h2>
  <ul>
    <li>トランザクション</li>
  </ul>

<h2>GitHub</h2>
  <ul>
    <li><a href="https://github.com/tuepon">Tomonori Ueno</a></li>
  </ul>

<h2>取得資格</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>資格名</th>
        <th>取得年</th>
        <th>有効性</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Linux技術者認定（LPIC）レベル1</td>
        <td>2007年</td>
        <td>Inactive</td>
      </tr>
      <tr>
        <td>HTML5プロフェッショナル認定レベル1</td>
        <td>2018年</td>
        <td>Active</td> 
      </tr>
    </tbody>
  </table>

@endsection