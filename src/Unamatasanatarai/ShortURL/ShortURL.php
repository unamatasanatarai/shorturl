<?php namespace Unamatasanatarai\ShortURL;
/**
 * Creates unique hash values for URL's
 * Based on the ID column
 */
use Illuminate\Database\Eloquent\Model;

class ShortURL extends Model {

	protected $table    = 'short_urls';
	protected $fillable = ['url', 'hash', 'count'];

	/**
	 * Generate brand new hash for the given URL
	 * @param  string $url The URL we wish to shorten
	 * @return string      the Hash to be used in your shortme/HASH
	 */
	static public function makeHash($url){
		$exists = self::where('url', '=', $url)->first();
		if ($exists){
			return $exists->hash;
		}
		$hashids = new \Hashids\Hashids(
			'a8f8b61b-719a-48c4-a5b5-b67a996fb90e',
			6,
			'abcdefghjkmnopqrstwxyz23456789-'
		);
		$short_url = self::create(array('url' => $url, 'hash' => 'a'));
		$short_url->hash = $hashids->encode($short_url->id);
		$short_url->save();
		return $short_url->hash;
	}

	/**
	 * Increase count and return URL
	 * @param  string $hash The Hash of an URL
	 * @return mixed        false if not found, string URL if found
	 */
	static public function hit($hash){
		$url = self::where('hash', '=', $hash)->first();
		if (!$url){
			return false;
		}
		$url->count++;
		$url->save();
		return $url->url;
	}
}
