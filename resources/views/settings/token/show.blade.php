<h2 class="tw-text-grey-darkest tw-mb-8 tw-text-3xl">Generate Token</h2>
<form method="POST" action="/settings/access">
	@method('PATCH')
	@csrf
	<button class="tw-button is-blue">Generate New Access Token</button>
</form>
	@if(session('message'))
	<p class="tw-text-green tw-mt-6">{{session('message')}}</p>
	@endif