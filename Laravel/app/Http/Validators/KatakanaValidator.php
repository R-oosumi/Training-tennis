<?php
namespace App\Http\Validators;

use Illuminate\Validation\Validator;

class KatakanaValidator extends Validator
{
  /**
     * validateKatakana カタカナのバリデーション（ブランクを許容）
     *
     * @param string $value
     * @access public
     * @return bool
     */
  public function validateKatakana($attribute, $value, $parameters)
  {
    // return (bool) preg_match("/^[ァ-ヶｦ-ﾟー]+$/u", $value);
    if (preg_match("/^[ァ-ヶｦ-ﾟー]+$/u", $value) !== 1) {
          return false;
      }

      return true;
  }
}
