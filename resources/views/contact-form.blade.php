<form class="form-card" action="{{ route('contact.submit') }}" method="post" enctype="multipart/form-data">
    @csrf
    @if (session('contact_sent'))
        <div class="success-message" role="status">Thanks for getting in touch. Your enquiry has been sent.</div>
    @endif
    <div class="form-grid">
        <div class="field">
            <label for="name">Name *</label>
            <input id="name" name="name" type="text" value="{{ old('name') }}" placeholder="Full Name or Company Name" autocomplete="name" maxlength="100" required>
            @error('name')<p class="field-error">{{ $message }}</p>@enderror
        </div>
        <div class="field">
            <label for="email">Email *</label>
            <input id="email" name="email" type="email" value="{{ old('email') }}" placeholder="Your email" autocomplete="email" maxlength="150" required>
            @error('email')<p class="field-error">{{ $message }}</p>@enderror
        </div>
        <div class="field">
            <label for="phone">Phone *</label>
            <input id="phone" name="phone" type="tel" value="{{ old('phone') }}" placeholder="Your phone number" autocomplete="tel" maxlength="50" required>
            @error('phone')<p class="field-error">{{ $message }}</p>@enderror
        </div>
        <div class="field">
            <label for="site">Site Address *</label>
            <input id="site" name="site" type="text" value="{{ old('site') }}" placeholder="Site address" maxlength="255" required>
            @error('site')<p class="field-error">{{ $message }}</p>@enderror
        </div>
        <div class="field full">
            <label for="message">Message *</label>
            <textarea id="message" name="message" maxlength="5000" required>{{ old('message') }}</textarea>
            @error('message')<p class="field-error">{{ $message }}</p>@enderror
        </div>
        <div class="field full">
            <label for="images">Photos (optional)</label>
            <input id="images" name="images[]" type="file" accept="image/jpeg,image/png,image/webp" multiple>
            <span class="upload-hint">Attach up to 3 JPG, PNG, or WebP images (2 MB each).</span>
            @error('images')<p class="field-error">{{ $message }}</p>@enderror
            @error('images.*')<p class="field-error">{{ $message }}</p>@enderror
        </div>
        <div class="field full">
            <button class="button button-red" type="submit">Send Enquiry</button>
        </div>
    </div>
</form>
