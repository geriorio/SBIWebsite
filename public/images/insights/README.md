# Insights Article Images

This directory contains images for the insights articles. Please add the following images:

## Required Images:

### Article Thumbnails (for cards on insights page):
1. **article1.jpg** - ERP & Digital Systems article
   - Theme: Digital transformation, workflow automation, billing systems
   - Suggested: Modern office, digital dashboard, or automated workflow visualization

2. **article2.jpg** - System Integration article
   - Theme: System connectivity, data flow, integration technology
   - Suggested: Connected systems, network visualization, or integration dashboard

3. **article3.jpg** - Operational Efficiency article
   - Theme: Process optimization, workflow improvement, efficiency
   - Suggested: Streamlined processes, workflow diagrams, or efficient operations

4. **article4.jpg** - Data & Analytics Dashboards article
   - Theme: Analytics, dashboards, data visualization
   - Suggested: Power BI dashboard, charts, or analytics visualization

5. **article5.jpg** - SamatorEdu Digital Learning article
   - Theme: E-learning, digital training, capability building
   - Suggested: Online learning platform, training interface, or digital education

### Additional Article Images:

6. **samatoredu-dashboard.jpg** - SamatorEdu platform screenshot
   - This is referenced in the article5 detail page
   - Source: https://drive.google.com/file/d/1UDF9BCFo6ophLHLfvPcahVODh8R73OJh/view?usp=sharing
   - Download this image from Google Drive and save as samatoredu-dashboard.jpg

## Image Specifications:
- **Format:** JPG (recommended) or PNG
- **Dimensions:** Minimum 1200x800px (landscape orientation)
- **Aspect Ratio:** 3:2 preferred
- **File Size:** Optimize for web (under 500KB recommended)
- **Quality:** High resolution for retina displays

## Placement:
All images should be placed directly in this directory:
`public/images/insights/`

The images will be automatically loaded by the Laravel blade templates using:
```php
{{ asset('images/insights/article1.jpg') }}
```

## Notes:
- Images are used both as thumbnails on the insights listing page and as hero backgrounds on detail pages
- Make sure images have good contrast if they'll be used as backgrounds with text overlay
- The detail pages apply a dark overlay, so lighter images work well
