<!-- ======= pages/admin/about/add ======= -->

@extends('pages.admin.partials.master')

@section('title', 'admin - Add Feature About Me')

@section('konten')
    
    <div class="bg-slate-950 py-20">
        <div class="container mx-auto px-4">
            <section class="bg-white dark:bg-gray-900">
                <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
                    <form action="#">
                        <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Add Feature - About Me</h2>
                        <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                            <div class="w-full">
                                <label for="titleProject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title Project</label>
                                <input type="text" name="titleProject" id="titleProject" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Title Project" required="">
                            </div>
                            <div class="w-full">
                                <label for="img" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Img</label>
                                <input type="text" name="img" id="img" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Img" required="">
                            </div>
                            <div class="w-full">
                                <label for="LinkdetailProject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Link Detail Project</label>
                                <input type="text" name="LinkdetailProject" id="LinkdetailProject" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Link Detail Project" required="">
                            </div>
                            <div class="w-full">
                                <label for="projectName" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Project Name</label>
                                <input type="text" name="projectName" id="projectName" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Project Name" required="">
                            </div>
                            <div class="sm:col-span-2">
                                <label for="projectExplain" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Project Explain</label>
                                <textarea name="projectExplain" id="projectExplain" cols="30" rows="7" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Project Explain" required=""></textarea>
                            </div>
                        </div>
                        <h2 class="mt-2 mb-4 text-xl font-bold text-gray-900 dark:text-white">Add Feature - Detail Projects</h2>
                        <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                            <div class="w-full">
                                <label for="titlePage" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title Page</label>
                                <input type="text" name="titlePage" id="titlePage" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Title Page" required="">
                            </div>
                            <div class="w-full">
                                <label for="linkVideo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Link Video</label>
                                <input type="text" name="linkVideo" id="linkVideo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Link Video" required="">
                            </div>
                            <div class="sm:col-span-2">
                                <label for="titleProject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title Project</label>
                                <input type="text" name="titleProject" id="titleProject" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Title Project" required="">
                            </div>
                            <div class="sm:col-span-2">
                                <label for="projectExplain" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Project Explain</label>
                                <textarea name="projectExplain" id="projectExplain" cols="30" rows="7" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Project Explain" required=""></textarea>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="projectDescribe" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Project Describe</label>
                                <textarea name="projectDescribe" id="projectDescribe" cols="30" rows="7" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Project Describe" required=""></textarea>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="projectFeature" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Project Feature</label>
                                <textarea name="projectFeature" id="projectFeature" cols="30" rows="7" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Project Feature" required=""></textarea>
                            </div>
                        </div>
                        <h2 class="mt-2 mb-4 text-xl font-bold text-gray-900 dark:text-white">Add Feature - My Certificates</h2>
                        <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                            <div class="w-full">
                                <label for="titlePage" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title Page</label>
                                <input type="text" name="titlePage" id="titlePage" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Title Page" required="">
                            </div>
                            <div class="w-full">
                                <label for="linkVideo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Link Video</label>
                                <input type="text" name="linkVideo" id="linkVideo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Link Video" required="">
                            </div>
                            <div class="sm:col-span-2">
                                <label for="certificateName" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Certificate Name</label>
                                <input type="text" name="certificateName" id="certificateName" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Certificate Name" required="">
                            </div>
                            <div class="sm:col-span-2">
                                <label for="certificateExplain" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Certificate Explain</label>
                                <textarea name="certificateExplain" id="certificateExplain" cols="30" rows="7" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Certificate Explain" required=""></textarea>
                            </div>
                        </div>
                        <h2 class="mt-2 mb-4 text-xl font-bold text-gray-900 dark:text-white">Add Feature - My Papers</h2>
                        <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                            <div class="w-full">
                                <label for="titlePage" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title Page</label>
                                <input type="text" name="titlePage" id="titlePage" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Title Page" required="">
                            </div>
                            <div class="w-full">
                                <label for="linkVideo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Link Video</label>
                                <input type="text" name="linkVideo" id="linkVideo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Link Video" required="">
                            </div>
                            <div class="sm:col-span-2">
                                <label for="paperName" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Paper Name</label>
                                <input type="text" name="paperName" id="paperName" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Paper Name" required="">
                            </div>
                            <div class="sm:col-span-2">
                                <label for="paperExplain" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Paper Explain</label>
                                <textarea name="paperExplain" id="paperExplain" cols="30" rows="7" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Paper Explain" required=""></textarea>
                            </div>
                        </div>
                        <button type="submit"
                            class="mt-5 border transition-colors focus:ring-2 p-0.5 disabled:cursor-not-allowed border-transparent bg-sky-600 hover:bg-sky-700 active:bg-sky-800 text-white disabled:bg-gray-300 disabled:text-gray-700 rounded-lg ">
                                <span
                                    class="flex items-center justify-center gap-1 font-medium py-1 px-2.5 text-base false">
                                    Add Feature
                                </span>
                        </button>
                        <button type="submit"
                            class="mt-5 border transition-colors focus:ring-2 p-0.5 disabled:cursor-not-allowed border-transparent bg-sky-600 hover:bg-sky-700 active:bg-sky-800 text-white disabled:bg-gray-300 disabled:text-gray-700 rounded-lg ">   
                                <a href="/admin/about" class="flex items-center justify-center gap-1 font-medium py-1 px-2.5 text-base false">
                                    Back
                                </a>
                        </button>
                    </form>
                </div>
              </section>
        </div>
    </div>
@endsection