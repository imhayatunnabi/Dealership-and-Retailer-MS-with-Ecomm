<?php
namespace App\Repository;

use App\Models\Banner;

class BannerRepository {

            public function create(array $data): Banner
            {
                return Banner::create([$data]);
            }

            public function update(int $id, array $data): Banner
            {
                $item = Banner::find($id);
                $item->update([$data]);
                return $item;
            }
}