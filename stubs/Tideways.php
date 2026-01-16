<?php

namespace Tideways {
    class Profiler {
        private function __construct() {}

        public static function isStarted(): bool {}

        public static function isTracing(): bool {}

        public static function isProfiling(): bool {}

        public static function containsDeveloperTraceRequest(): bool {}

        /**
         * @psalm-param null|string|array{api_key?: string, service?: string, sample_rate?: int} $options
         * @param null|string|array $options
         */
        public static function start($options = null): void {}

        public static function stop(): void {}

        public static function ignoreTransaction(): void {}

        /**
         * @param array<string>|null $trace
         */
        public static function logFatal(string $message, string $file, int $line, ?string $type = null, ?array $trace = null): void {}

        public static function logException(\Throwable $exception): void {}

        public static function getTransactionName(): ?string {}

        public static function setTransactionName(string $transactionName): void {}

        public static function detectTransactionFunction(string $functionName): void {}

        public static function detectExceptionFunction(string $functionName): void {}

        public static function triggerCallgraphOn(string $functionName): void {}

        public static function watch(string $functionName): void {}

        public static function watchCallback(string $functionName, callable $callback): void {}

        public static function enableCallgraphProfiler(): bool {}

        public static function disableCallgraphProfiler(): bool {}

        public static function enableTracingProfiler(): bool {}

        public static function disableTracingProfiler(): bool {}

        public static function addEventMarker(string $eventName): void {}

        /**
         * @param object|string|int|float|bool|null $value
         */
        public static function setCustomVariable(string $name, $value): void {}

        public static function currentTraceId(): ?string {}

        public static function setServiceName(string $serviceName): void {}

        public static function createSpan(string $category): Profiler\Span {}

        public static function generateServerTimingHeaderValue(): string {}
        public static function generateDistributedTracingHeaders(): array {}
        public static function generateReferencedTracesHeaders(): array {}

        /** @since tideways 5.4.36 **/
        public static function markAsWebTransaction(): void {}
        
        /** @since tideways 5.5.6 **/
        public static function markPageCacheHit(): void {}

        /** @since tideways 5.5.6 **/
        public static function markPageCacheMiss(): void {}

        /** @since tideways 5.5.14 **/
        public static function setTags(array $tags): void {}
    }
}

namespace Tideways\Profiler {
    class Span
    {
        private function __construct() {}

        public function getId(): string {}

        /**
         * @param array<string,int|string|bool> $annotations
         */
        public function annotate(array $annotations): void {}

        public function logException(\Throwable $exception): void {}

        public function finish(): void {}
    }

    #[\Attribute(\Attribute::TARGET_METHOD | \Attribute::TARGET_FUNCTION)]
    class WithSpan
    {
    }
}
