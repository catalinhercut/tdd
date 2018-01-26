<?php 
/**
 * Test case for the Sample class.
 */
// namespace Sample;

class SampleTest extends \PHPUnit_Framework_TestCase {
	/**
	 * Tests if the expected answer is returned.
	 *
	 * @covers Sample::answer()
	 *
	 * @return void
	 */
	public function test_return_expected_answer() {
		$this->assertSame(
			'42',
			( new Sample() )->answer(),
			'answer() should return the expected answer.'
		);
	}
}