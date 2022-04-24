@extends('template_admin')

@section('title','タイトル')
@section('description','ディスクリプション')
@include('components/head')
@section('content')
<div class="m-10">
    <div class="w-full p-10 rounded-lg bg-white">
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                    タイトル
                </label>
                <input type="text" id="name" class="appearance-none w-full mr-3 py-3 px-2 leading-tight border-b focus:outline-none focus:border-sky-300" placeholder="記事のタイトルを入力">
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                    タグ
                </label>
                <div class="flex items-center border-b border-gray-200 py-2">
                    <input class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" placeholder="右側の編集ボタンからタグを選択" aria-label="Full name" readonly>
                    <button class="flex-shrink-0 bg-sky-300 hover:bg-sky-500 border-sky-300 hover:border-sky-500 text-sm border-4 text-white py-1 px-2 rounded" type="button" data-modal-toggle="large-modal">
                        　編集　
                    </button>
                </div>
            </div>
        </div>
        <div class="-mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                    内容
                </label>
            </div>
            <div class="flex px-3">
                <div class="w-full">
                    <textarea id="markdown_editor_textarea"
                              class="mt-1 px-2 py-1 block w-full border border-b border-gray-300 focus:outline-none focus:border-sky-300" rows="20"></textarea>
                </div>
                <div class="w-full h-auto">
                    <div id="markdown_preview"
                         class="markdown_view mt-1 px-2 py-1 border border-b border-gray-300 "></div>
                </div>
            </div>
        </div>
        <div class="flex w-full -mx-3 mb-6">
            <button class="flex-shrink-0 bg-sky-300 hover:bg-sky-500 border-sky-300 hover:border-sky-500 text-sm border-4 text-white py-1 px-2 rounded" type="button">
                　投稿　
            </button>
        </div>
    </div>
</div>
<div id="large-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-4xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex justify-between items-center p-5 rounded-t border-b dark:border-gray-600">
                <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                    タグ編集
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="large-modal">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    With less than a month to go before the European Union enacts new consumer privacy laws for its citizens, companies around the world are updating their terms of service agreements to comply.
                </p>
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is meant to ensure a common set of data rights in the European Union. It requires organizations to notify users as soon as possible of high-risk data breaches that could personally affect them.
                </p>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                <button data-modal-toggle="large-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
                <button data-modal-toggle="large-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
            </div>
        </div>
    </div>
</div>
@endsection