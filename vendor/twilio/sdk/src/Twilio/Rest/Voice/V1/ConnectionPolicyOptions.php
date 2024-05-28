<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Voice\V1;

use Twilio\Options;
use Twilio\Values;

abstract class ConnectionPolicyOptions {
    /**
     * @param string $friendlyName A string to describe the resource
     * @return CreateConnectionPolicyOptions Options builder
     */
    public static function create(string $friendlyName = Values::NONE): CreateConnectionPolicyOptions {
        return new CreateConnectionPolicyOptions($friendlyName);
    }

    /**
     * @param string $friendlyName A string to describe the resource
     * @return UpdateConnectionPolicyOptions Options builder
     */
    public static function update(string $friendlyName = Values::NONE): UpdateConnectionPolicyOptions {
        return new UpdateConnectionPolicyOptions($friendlyName);
    }
}

class CreateConnectionPolicyOptions extends Options {
    /**
     * @param string $friendlyName A string to describe the resource
     */
    public function __construct(string $friendlyName = Values::NONE) {
        $this->options['friendlyName'] = $friendlyName;
    }

    /**
     * A descriptive string that you create to describe the resource. It is not unique and can be up to 255 characters long.
     *
     * @param string $friendlyName A string to describe the resource
     * @return $this Fluent Builder
     */
    public function setFriendlyName(string $friendlyName): self {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Voice.V1.CreateConnectionPolicyOptions ' . $options . ']';
    }
}

class UpdateConnectionPolicyOptions extends Options {
    /**
     * @param string $friendlyName A string to describe the resource
     */
    public function __construct(string $friendlyName = Values::NONE) {
        $this->options['friendlyName'] = $friendlyName;
    }

    /**
     * A descriptive string that you create to describe the resource. It is not unique and can be up to 255 characters long.
     *
     * @param string $friendlyName A string to describe the resource
     * @return $this Fluent Builder
     */
    public function setFriendlyName(string $friendlyName): self {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Voice.V1.UpdateConnectionPolicyOptions ' . $options . ']';
    }
}