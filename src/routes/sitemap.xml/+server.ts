export async function GET() {

	const sitemap = `<?xml version="1.0" encoding="UTF-8"?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>https://www.jvw.dev/</loc>
        <lastmod>2024-02-08T00:00:00.000Z</lastmod>
</urlset>`; return new Response(sitemap, {
		headers: {
			'Cache-Control': 'max-age=600',
			'Content-Type': 'application/xml',
		},
	});
}