# Database Setup Instructions

## Migration Files Created

1. **contact_forms** - Stores contact form submissions
2. **newsletter_subscriptions** - Stores newsletter subscribers

## Running Migrations

Open PowerShell and run:

```powershell
# Navigate to project directory
cd c:\SAMATOR\SBIWebsite

# Run migrations
php artisan migrate
```

## Database Structure

### contact_forms Table
- id (bigint, primary key)
- full_name (varchar)
- email (varchar, indexed)
- subject (varchar)
- message (text)
- source (varchar) - 'service', 'about', 'contact'
- status (varchar, indexed) - 'new', 'read', 'replied'
- created_at (timestamp, indexed)
- updated_at (timestamp)

### newsletter_subscriptions Table
- id (bigint, primary key)
- email (varchar, unique, indexed)
- status (varchar, indexed) - 'active', 'unsubscribed'
- subscribed_at (timestamp)
- unsubscribed_at (timestamp, nullable)
- created_at (timestamp)
- updated_at (timestamp)

## API Endpoints

### Contact Form
**POST** `/api/contact`

Request Body:
```json
{
    "full_name": "John Doe",
    "email": "john@example.com",
    "subject": "Digital Transformation",
    "message": "I'm interested in your services...",
    "source": "service"
}
```

### Newsletter Subscription
**POST** `/api/newsletter`

Request Body:
```json
{
    "email": "user@example.com"
}
```

## Using the Service Contact Modal

### In Service Detail Pages

Add this before closing `</body>` tag:

```blade
@include('components.service-contact-modal')
```

### Trigger the Modal

Add `onclick="openServiceModal()"` to your CTA button:

```blade
<button onclick="openServiceModal()">Contact Us</button>
```

## Features

✅ **Contact Form Modal**
- Popup modal with same design as About page
- AJAX submission (no page reload)
- Success/error messages
- Auto-close after successful submission

✅ **Newsletter Subscription**
- Integrated in footer
- Prevents duplicate subscriptions
- Reactivates unsubscribed users
- AJAX submission with feedback

✅ **Database Tables**
- Indexed for performance
- Status tracking
- Timestamps for analytics
- Source tracking for contact forms

## Testing

After running migrations, test the forms:

1. **Newsletter**: Fill footer form
2. **Contact Modal**: Click CTA button on service detail page
3. **Check Database**: 
   ```powershell
   php artisan tinker
   # Then run:
   \App\Models\ContactForm::all()
   \App\Models\NewsletterSubscription::all()
   ```
