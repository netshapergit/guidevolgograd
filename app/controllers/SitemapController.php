<?php

class SitemapController extends BaseController {

    public function index() {
        $pages = Page::where('active', '1')
            ->select(array('id', 'alias', 'field_header', 'title', 'parent_page_id'))
            ->get()
            ->toArray();
        return View::make('_.user.sitemap', array(
			'pages' => $pages
		));
    }

}